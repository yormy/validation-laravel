<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use Illuminate\Support\Facades\DB;
use Yormy\ValidationLaravel\Exceptions\XidNotFoundException;

class XidWithTrashed extends Rule
{

    protected bool $treatAsHackAttempt;
    private bool $showField;

    private string $table;

    private $errorPrefix;

    public function __construct(string $table, bool $showField = false, bool $treatAsHackAttempt = false)
    {
        $this->showField = $showField;
        $this->table = $table;
        $this->treatAsHackAttempt = $treatAsHackAttempt;
    }

    /**
     * Determine if the validation rule passes.
     */
    public function passes(string $attribute, mixed $value): bool
    {
        $this->setAttribute($attribute);

        $passed = true;

        if (mb_strlen($value) !== 22) {
            $this->errorPrefix = 'A';
            $passed = false;
        }

        $regex = '/^[0-9a-zA-ZÆÄ]$/';
        if (preg_match($regex, $value) > 0) {
            $this->errorPrefix = 'B';
            $passed = false;
        }

        if (DB::table($this->table)
            ->where('xid', $value)
            ->doesntExist()) {
            $this->errorPrefix = 'B';
            $passed = false;
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
