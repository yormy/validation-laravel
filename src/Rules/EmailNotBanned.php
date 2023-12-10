<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Mexion\BedrockUsersv2\Domain\User\Repositories\MemberRepository;
use Yormy\ValidationLaravel\Facades\BannedEmail;

class EmailNotBanned implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (BannedEmail::isBanned($value)) {
            $fail(__('validation::rule.email.banned' ,['attribute' => $attribute, 'value' => $value]));
        }
    }
}
