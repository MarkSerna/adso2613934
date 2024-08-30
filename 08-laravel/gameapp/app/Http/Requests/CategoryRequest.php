<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Category;

class CategoryRequest extends FormRequest
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
        if ($this->method() === 'PUT') {
            return [
                'name' => 'required|string'.$this->id,
                'manufacturer' => 'required|string',
                'releasedate' => 'required|date',
                'description' => 'required|string',

            ];
        } else {
            return [
                'name' => ['required', 'string', 'unique:'.Category::class],
                'image' => ['required', 'image'],
                'manufacturer' => ['required', 'string'],
                'releasedate' => ['required', 'date'],
                'description' => ['required', 'string']
            ];
        }
    }

    public function messages(): array
    {
        return [
            'namme.required' => 'The: atribute is required'
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'Name'
        ];
    }
}