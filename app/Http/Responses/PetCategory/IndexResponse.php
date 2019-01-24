<?php

namespace App\Http\Responses\PetCategory;

use App\Traits\ResponseTrait;
use Illuminate\Contracts\Support\Responsable;

class IndexResponse implements Responsable
{

    use ResponseTrait;

    protected $result;

    public function __construct($result)
    {
        $this->result = $result;
    }

    public function toResponse($request)
    {
        // TODO: Implement toResponse() method.

        $data = $this->transform();
        return $data;
    }

    public function transform()
    {
        $this->result->getCollection()->transform(function($petCategory){
            return [
                'id' => $petCategory->id,
                'name' => $petCategory->name,
                'sort' => $petCategory->sort,
                'create_at' => $petCategory->createTime()
            ];
        });

        return $this->responseJson($this->result);
    }
}