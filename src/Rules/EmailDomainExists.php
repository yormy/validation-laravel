<?php


namespace Yormy\ValidationLaravel\Rules;

namespace Yormy\ValidationLaravel\Rules;

use Illuminate\Contracts\Validation\ValidationRule;
use Closure;

class EmailDomainExists implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $parts = explode('@', $value);
        $domain = array_pop($parts);

        if (!checkdnsrr($domain, 'ANY')) {
            $fail(__('bedrock-users::validations.email.invalid_domain'));
        }
    }
}
