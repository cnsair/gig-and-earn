<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:100'],
            'author' => ['required', 'string', 'max:200'],
            'isbn' => ['integer', 'nullable'],
            'description' => ['string', 'max:500', 'nullable'],
            'book_file' => ['mimes:pdf,docx,doc', 'max:10240'],
            'cover_art' => ['image', 'max:3072', 'nullable'],
        ];
    }
}
