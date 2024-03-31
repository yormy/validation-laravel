<?php

// phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('banned_emails', function (Blueprint $table) {
            $table->id('id');
            $table->string('banned');
            $table->string('source')->nullable();
            $table->string('notes')->nullable();

            $table->timestamps();
        });
    }
};
