<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
            // 'title' => 'required|max:100',
            // 'description' => 'max:1500',
            // 'file' => 'required|mimes:mp4,avi,flv|max:20480',

            'title' => ['required', 'string', 'max:100'],
            'description' => ['string', 'max:1500'],
            'file' => ['required', 'mimes:mp4,avi,flv', 'max:20480'],
        ];
    }
}
