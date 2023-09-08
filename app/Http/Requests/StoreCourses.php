<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourses extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:5|max:10',
            'description' => 'required',
            'category' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre del curso',
            'description' => 'descripcion del curso',
            'category' => 'categoria del curso'
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'Debe ingresar una descripción del curso'
        ];
    }
}
