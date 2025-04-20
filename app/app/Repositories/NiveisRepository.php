<?php

namespace App\Repositories;

use App\Models\Niveis;

class NiveisRepository extends Repository
{
    public function __construct()
    {
        parent::__construct(new Niveis());
    }
}
