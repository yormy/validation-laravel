<?php

namespace Yormy\ValidationLaravel\Tests\Unit;

use Yormy\ValidationLaravel\Facades\DisposableEmail;
use Yormy\ValidationLaravel\Tests\TestCase;

class DisposableEmailTest extends TestCase
{
    /**
     * @test
     * @group  xxx
     */
    public function DisposableDomain(): void
    {
        $disposable = DisposableEmail::isDisposable('hello@disposable-domain.com');
        $this->assertTrue($disposable);
    }

    /**
     * @test
     */
    public function NotDisposableDomain(): void
    {
        $disposable = DisposableEmail::isDisposable('hello@web12312312-ideal.fr');
        $this->assertFalse($disposable);
    }

    /**
     * @test
     */
    public function NotDisposableEmailDomain(): void
    {
        $disposable = DisposableEmail::isDisposable('eewrwe@example.com');
        $this->assertFalse($disposable);
    }

    /**
     * @test
     */
    public function DisposableEmail(): void
    {
        $disposable = DisposableEmail::isDisposable('email@disposable-email.com');
        $this->assertTrue($disposable);
    }
}
