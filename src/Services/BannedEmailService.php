<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Services;

use Yormy\ValidationLaravel\Repositories\BannedEmailRepository;

class BannedEmailService
{
    public function isBanned(string $email): bool
    {
        $email = strtolower($email);
        $parts = explode('@', $email);
        $emailUser = $parts[0];
        $emailDomain = $parts[1];

        $tokenizedBanned = $this->getBanned();
        $tokenizedDomain = '#'.$emailDomain.'#';
        $tokenizedEmail = '#'.$email.'#';

        if (strpos($tokenizedBanned, $tokenizedDomain) !== false) {
            return true;
        }

        if (strpos($tokenizedBanned, $tokenizedEmail) !== false) {
            return true;
        }

        return false;
    }

    public function isNotDisposable(string $email): bool
    {
        return ! $this->isBanned($email);
    }

    private function getBanned(): string
    {
        $bannedEmailRepository = new BannedEmailRepository();

        return $bannedEmailRepository->getAll();
    }
}
