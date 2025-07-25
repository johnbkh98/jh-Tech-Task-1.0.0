<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;

class AddGenreRequest extends FormRequest
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
     * @return array
     */
    public function rules(): array
    {
        return [
            'genres' => 'requires|array',
            'genres.*' => 'required|integer'
        ];
    }
}
