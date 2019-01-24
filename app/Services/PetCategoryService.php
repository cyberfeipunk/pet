<?php

namespace App\Services;

use App\Repository\Contracts\PetCategoryRepository;

class PetCategoryService
{
    protected $petCategoryRepository;

    public function __construct(PetCategoryRepository $petCategoryRepository)
    {
        $this->petCategoryRepository = $petCategoryRepository;
    }

    public function searchPetCategories(int $perpage = 0)
    {
        return $this->petCategoryRepository->searchPetCategories($perpage);
    }

    public function storePetCategory($data){
        $result =  $this->petCategoryRepository->create($data);
        return $result;
    }
}