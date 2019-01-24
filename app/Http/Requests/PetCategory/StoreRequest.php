<?php
namespace App\Http\Requests\PetCategory;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize()
    {

        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:1|max:10',
            'sort'  =>  'required|digits_between:1,6'
        ];
    }
}