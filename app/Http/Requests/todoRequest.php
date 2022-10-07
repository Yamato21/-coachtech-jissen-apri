<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class todoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == '/') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
			'task_name' => 'required|max:20',
        ];
    }

      public function messages()
    {
        return [
            'task_name.max:20' => '最大20文字以内',
        ];
    }
}
