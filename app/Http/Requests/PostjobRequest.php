<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostjobRequest extends FormRequest
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
            'category' => ['required', 'string', 'max:100'],
            'title' => ['required', 'string', 'max:100'],
            'company' => ['required', 'string', 'max:100'],
            'web_address' => ['required', 'string', 'max:100'],
            'location' => ['required', 'string', 'max:100'],
            'price_range' => ['required', 'string', 'max:100'],
            'description' => ['string', 'max:1500'],
            'file' => ['mimes:jpeg,jpg,png', 'max:5120'],
        ];
    }
}
