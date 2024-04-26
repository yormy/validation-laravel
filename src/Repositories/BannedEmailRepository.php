<?php

declare(strict_types=1);

namespace Yormy\ValidationLaravel\Repositories;

use Yormy\ValidationLaravel\Models\BannedEmail;

class BannedEmailRepository
{
    public function __construct(private ?BannedEmail $model = null)
    {
        if (! $model) {
            $this->model = new BannedEmail();
        }
    }

    public function getAll()
    {
        return $this->getAllTokenized();
    }

    private function getAllTokenized()
    {
        $all = $this->model->all()->pluck('email');

        return '#'.$all->implode('#').'#';
    }
}
