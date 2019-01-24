<?php

namespace App\Repository\Eloquent;

use App\Models\PetCategory;
use App\Repository\Contracts\PetCategoryRepository;
use App\Repository\Filters\SearchNameFilter;
use App\Repository\Filters\SortFilter;
use Phpno1\Architecture\Criterias\FilterRequest;
use Phpno1\Architecture\Eloquent\AbstractRepository;

class PetCategoryRepositoryEloquent extends AbstractRepository implements PetCategoryRepository
{
    protected $filters = [
        'search_name' => SearchNameFilter::class,
        'o' => SortFilter::class
    ];

    public function entity()
    {
        // TODO: Implement entity() method.
        return PetCategory::class;
    }

    public function searchPetCategories(int $perPage = 0){
        $v1 = $this->petCategoriesFields();
        $v2 = new FilterRequest($this->filters);
        $v3 = $v1->withCriteria($v2);

        $result = $v3->paginate($perPage);
        return $result;
    }

}