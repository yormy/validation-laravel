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
        $emailUser = $parts[0];
        $emailDomain = $parts[1];

        $tokenizedDisposable = $this->getDisposable();
        $tokenizedDomain = '#'.$emailDomain.'#';
        $tokenizedEmail = '#'.$email.'#';

        if (strpos($tokenizedDisposable, $tokenizedDomain) !== false) {
            return true;
        }

        if (strpos($tokenizedDisposable, $tokenizedEmail) !== false) {
            return true;
        }

        return false;
    }

    public function isNotDisposable(string $email): bool
    {
        return ! $this->isDisposable($email);
    }

    private function getDisposable(): string
    {
        $DisposableEmailRepository = new DisposableEmailRepository();

        return $DisposableEmailRepository->getAll();
    }
}
