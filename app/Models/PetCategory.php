<?php

namespace App\Models;

use App\Traits\DateTimeTrait;
use Illuminate\Database\Eloquent\Model;

class PetCategory extends Model
{
    use DateTimeTrait;

    protected $fillable = ['name','sort','parent_cat'];
    protected $dates = ['created_at','updated_at'];

    public function scopePetCategoriesFields($query)
    {
        return $query->select(['id','name','sort','created_at']);
    }
}
