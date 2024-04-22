<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Models;

use Illuminate\Database\Eloquent\Model;

class DisposableEmail extends Model
{
    protected $table ='system_emails_disposables';

    protected $fillable = [
        'banned',
    ];
}
