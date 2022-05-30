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
          'material' => 'required',
          'photo' => 'required',
        ];
    }
    public function messages()
  {
      return [
          'name.required' => 'Morate unijeti ime!',
          'material.required' => 'Morate unijeti material!',
          'photo.required' => 'Morate unijeti sliku!',
      ];
  }
}
