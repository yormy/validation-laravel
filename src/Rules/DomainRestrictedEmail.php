<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use Illuminate\Support\Str;
use Yormy\ValidationLaravel\Rules\Exceptions\RuleSetupException;

use function __;
use function array_map;
use function explode;
use function filter_var;
use function implode;
use function in_array;

/**
 * Only allow emails from whitelisted list of domains
 * ->validDomains(['gmail.com','laravel.com',]),
 * Class DomainRestrictedEmail
 */
class DomainRestrictedEmail extends Rule
{
    /** @var array */
    protected $validDomains = [];

    /**
     * @param  string  $attribute
     * @param  mixed  $value
     */
    public function passes($attribute, $value): bool
    {
        $this->setAttribute($attribute);

        if ($this->validDomains === []) {
            throw new RuleSetupException('Zero domains have been whitelisted using the "validDomains()" method');
        }

        if (! filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        $domain = explode('@', $value)[1];

        return in_array($domain, $this->validDomains);
    }

    public function validDomains(array $domains): self
    {
        $this->validDomains = $domains;

        return $this;
    }

    public function message(): string
    {
        return (string) __(
            'core::validation.'.$this->getMessageKey(),
            [
                'attribute' => $this->getAttribute(),
                'plural' => Str::plural('domain', count($this->validDomains)),
                'domains' => implode(
                    ', ',
                    array_map(
                        function ($domain) {
                            return '@'.$domain;
                        },
                        $this->validDomains
                    )
                ),
            ]
        );
    }
}
