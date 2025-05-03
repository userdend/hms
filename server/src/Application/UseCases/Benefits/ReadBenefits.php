<?php

namespace App\Application\UseCases\Benefits;

use App\Domain\Repositories\BenefitRepositoryInterface;

class ReadBenefits
{
    public function __construct(private BenefitRepositoryInterface $benefitRepository)
    {
    }

    public function execute()
    {
        return $this->benefitRepository->all();
    }
}