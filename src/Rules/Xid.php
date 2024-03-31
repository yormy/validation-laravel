<?php

namespace Yormy\ValidationLaravel\Rules;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Yormy\ValidationLaravel\Exceptions\XidNotFoundException;

class Xid extends Rule
{
    private bool $showField;

    private string $table;

    private $errorPrefix;

    public function __construct($model, bool $showField = false, ?Exception $exception = null)
    {
        parent::__construct($exception);

        $this->showField = $showField;
        $this->table = (new $model)->getTable();
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $this->setAttribute($attribute);

        $passed = true;

        $regex = '/^[0-9a-zA-ZÆÄ]$/';
        if (preg_match($regex, $value) > 0) {
            $this->errorPrefix = 'B';
            $passed = false;
        }

        if (Schema::hasColumn($this->table, 'deleted_at')) {
            if (DB::table($this->table)
                ->where('xid', $value)
                ->whereNull('deleted_at')
                ->doesntExist()) {
                $this->errorPrefix = 'C';
                $passed = false;
            }
        } else {
            if (DB::table($this->table)
                ->where('xid', $value)
                ->doesntExist()) {
                $this->errorPrefix = 'D';
                $passed = false;
            }
        }

        if (! $passed) {
            throw new XidNotFoundException();
        }

        return $passed;
    }

    public function message(): string
    {
        if (! $this->showField) {
            return (string) __('core::validation.xid_hidden_details', ['prefix' => $this->errorPrefix]);
        }

        $key = 'core::validation.'.$this->getMessageKey();

        return (string) __(
            $key,
            [
                'attribute' => $this->getAttribute(),
            ]
        );
    }
}
