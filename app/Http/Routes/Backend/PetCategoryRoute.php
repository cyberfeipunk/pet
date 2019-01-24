<?php

namespace App\Http\Routes\Backend;

use Illuminate\Cache\Repository;
use Illuminate\Contracts\Routing\Registrar;

class PetCategoryRoute
{

    public function map(Registrar $router){

        $router->resource('/pet/category','PetCategoryController');
        $router->get('/pet/categories','PetCategoryController@getPetCategoryAll');
    }
}