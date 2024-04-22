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
    public function BannedDomain(): void
    {
        $banned = DisposableEmail::isBanned('hello@web-ideal.fr');
        $this->assertTrue($banned);
    }

    /**
     * @test
     */
    public function NotBannedDomain(): void
    {
        $banned = DisposableEmail::isBanned('hello@web12312312-ideal.fr');
        $this->assertFalse($banned);
    }

    /**
     * @test
     */
    public function NotBannedEmailDomain(): void
    {
        $banned = DisposableEmail::isBanned('eewrwe@example.com');
        $this->assertFalse($banned);
    }

    /**
     * @test
     */
    public function BannedEmail(): void
    {
        $banned = DisposableEmail::isBanned('test@example.com');
        $this->assertTrue($banned);
    }
}
