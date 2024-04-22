<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Services;

use Yormy\ValidationLaravel\Repositories\DisposableEmailRepository;

class DisposableEmailService
{
    public function isDisposable(string $email): bool
    {
        $email = strtolower($email);
        $parts = explode('@', $email);
        $emailUSer = $parts[0];
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

    public function isNotBanned(string $email): bool
    {
        return ! $this->isDisposable($email);
    }

    private function getBanned(): string
    {
        $DisposableEmailRepository = new DisposableEmailRepository();

        return $DisposableEmailRepository->getAll();
    }
}
