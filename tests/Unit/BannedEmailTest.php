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
        $banned = BannedEmail::isBanned('hello@web-ideal.fr');
        $this->assertTrue($banned);
    }

    /**
     * @test
     * @group  xxx
     */
    public function NotBannedDomain(): void
    {
        $banned = BannedEmail::isBanned('hello@web12312312-ideal.fr');
        $this->assertFalse($banned);
    }


    /**
     * @test
     * @group  xxx
     */
    public function NotBannedEmailDomain(): void
    {
        $banned = BannedEmail::isBanned('eewrwe@example.com');
        $this->assertFalse($banned);
    }

    /**
     * @test
     * @group  xxx
     */
    public function BannedEmail(): void
    {
        $banned = BannedEmail::isBanned('test@example.com');
        $this->assertTrue($banned);
    }
}
