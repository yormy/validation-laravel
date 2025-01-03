<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Models;

use Illuminate\Database\Eloquent\Model;

class BannedEmail extends Model
{
    protected $table ='system_emails_banned';

    protected $fillable = [
        'email',
    ];
}
