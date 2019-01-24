<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\PetCategory\StoreRequest;
use App\Http\Responses\PetCategory\IndexResponse;
use App\Services\PetCategoryService;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PetCategoryController extends Controller
{
    //
    use ResponseTrait;
    private  $petCategory;

    public function __construct(PetCategoryService $petCategoryService)
    {
        $this->petCategory = $petCategoryService;
    }

    public function index(){
        $result = $this->petCategory->searchPetCategories();
        return new IndexResponse($result);
    }

    public function store(StoreRequest $request)
    {

        $result = $this->petCategory->storePetCategory($request->all());
        if(!empty($result)){
            return $this->withCreated(['message'=>trans('message.created.success')]);
        }
        return $this->withCreated($result);
    }
}
