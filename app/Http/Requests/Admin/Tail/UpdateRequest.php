<?php

namespace App\Http\Requests\Admin\Tail;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|unique:categories|max:255',
            'content' => 'required|text',
            'region_id' => 'required',
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,webp,svg'],
        ];
    }
}
