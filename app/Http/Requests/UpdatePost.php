<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePost extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $id = $this->route('produto')->id;
        return [
            'descricao' => [
                'required',
                Rule::unique('produtos')->where('id', '<>', $id),
            ],
            'valor' => 'required',
            'quantidade' => 'required',
        ];
    }
}
