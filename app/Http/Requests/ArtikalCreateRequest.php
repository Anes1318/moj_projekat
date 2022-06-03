<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtikalCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
          'name' => 'required',
          'description' => 'required',
          'price' => 'required',
          'photo' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Morate unijeti ime!',
            'description.required' => 'Morate unijeti opis!',
            'price.required' => 'Morate unijeti cijenu!',
            'photo.required' => 'Morate izabrati sliku!',
        ];
    }
}
