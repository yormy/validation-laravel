<?php declare(strict_types = 1);

namespace Yormy\ValidationLaravel\Rules;

class BlacklistedEmailRule extends Rule
{
    protected string $className;

    public function __construct(string $className)
    {
        $this->className = $className;
    }

    public function passes($attribute, $value): bool
    {
        $this->setAttribute($attribute);

        $domain = explode("@", $value)[1];

        $model = $this->className;

        if (config('security.database_encryption')) {
            $isBlacklisted = $model::whereEncrypted('email_address', $value)
                ->orWhereEncrypted('email_address', '*@' . $domain)->count();
        } else {
            $isBlacklisted = $model::where('email_address', $value)
                ->orWhere('email_address', '*@' . $domain)->count();
        }

        if ($isBlacklisted <= 0) {
            return true;
        }

        return false;
    }
}
