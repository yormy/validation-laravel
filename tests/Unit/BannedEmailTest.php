<?php

namespace Yormy\ValidationLaravel\Tests\Unit;

use Yormy\ValidationLaravel\Facades\BannedEmail;
use Yormy\ValidationLaravel\Tests\TestCase;

class BannedEmailTest extends TestCase
{
    /**
     * @test
     * @group  xxx
     */
    public function BannedDomain(): void
    {
        $banned = BannedEmail::isBanned('hello@banned-domain.com');
        $this->assertTrue($banned);
    }

    /**
     * @test
     */
    public function NotBannedDomain(): void
    {
        $banned = BannedEmail::isBanned('hello@not-banned.com');
        $this->assertFalse($banned);
    }

    /**
     * @test
     */
    public function NotBannedEmailDomain(): void
    {
        $banned = BannedEmail::isBanned('notbanned@banned-email.com');
        $this->assertFalse($banned);
    }

    /**
     * @test
     */
    public function BannedEmail(): void
    {
        $banned = BannedEmail::isBanned('banned@banned-email.com');
        $this->assertTrue($banned);
    }
}
