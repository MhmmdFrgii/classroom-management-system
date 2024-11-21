<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlideRequest extends FormRequest
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

        $rules = [
            'title' => 'nullable|max:250'
        ];

        if ($this->isMethod('post')) {
            $rules['image'] = 'required|mimes:png,jpg,jpeg|max:2048';
        } elseif ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['image'] = 'nullable|mimes:png,jpg,jpeg|max:2048';
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'image.required' => 'Gambar harus diisi!',
            'image.mimes' => 'File gambar tidak valid!',
            // 'image.max' => 'Maximal ukuran file gambar 1MB!'
        ];
    }
}