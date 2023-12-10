<?php declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use Closure;
use Yormy\ValidationLaravel\Facades\BannedEmail;

class EmailNotBanned extends BaseValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (BannedEmail::isBanned($value)) {
            $fail(__('validation::rule.email.banned' ,['attribute' => $attribute, 'value' => $value]));
        }
    }
}
