<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title' => 'required' ,
            'lu_content_status' => 'required',
            'slug' => 'nullable|max:100' ,
            'body' => 'nullable' ,
            'short_description'=> 'nullable' ,
            'img' => 'nullable' ,
            'study_time' => 'nullable' ,
            'seo_keywords' => 'nullable' ,
            'seo_description' => 'nullable|max:500'
        ];
    }
}
