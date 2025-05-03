<?php

namespace App\Infrastructure\Persistence\Repositories;

use App\Domain\Entities\BenefitType;
use App\Domain\Repositories\BenefitRepositoryInterface;

class BenefitRepository implements BenefitRepositoryInterface
{
    public function all()
    {
        return BenefitType::all();
    }
}