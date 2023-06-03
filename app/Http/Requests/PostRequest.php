<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     * 
    public function authorize()
    {
        return false;
    }
    */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        //バリデーション(入力の際に必要な要件項目はここに記入する)
        return [
            //required:入力必須, string:文字列, max:最大文字数, 
            'post.title' => 'required|string|max:100',
            'post.body' => 'required|string|max:4000',
        ];
    }
}
