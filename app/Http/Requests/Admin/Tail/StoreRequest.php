<?php

namespace App\Http\Requests\Admin\Tail;

use Illuminate\Foundation\Http\FormRequest;
class StoreRequest extends FormRequest
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
            'title' => 'required|max:255',
            'content' => 'required',
            'region_id' => 'required',
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,webp,svg'],
        ];
    }

}
