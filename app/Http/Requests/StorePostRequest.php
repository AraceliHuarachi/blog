<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'tittle'=> ['required','min:5'],
            'slug'=> 'required|unique:posts',
            'category'=> 'required',
            'content'=> 'required'
        ];
    }
    /* public function messages()
    {
       return [
            'tittle.required'=>'The :attribute field is required. (editado)',
            'slug.required'=>'the slug field is required. (editadi)',
        ]; 
    } 
   public function attributes()
   {
    return[
        'tittle'=>'name',
    ];
   } */
}
