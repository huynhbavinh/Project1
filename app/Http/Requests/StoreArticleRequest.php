<?php

namespace App\Http\Requests;

use App\Rules\KiemDuyet;
use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
        return [
            'title' => [
                'required',
                'max:10',
                'min:3',
                new KiemDuyet
            ],
            'category_id' => 'required|exists:categories,id'
        ];
    }
    public function messages()
    {
        return[
            'title.min'=>'Tiêu đề chán thế'
        ];
    }
}
