<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTaskRequest extends FormRequest
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
            'title' => 'required|min:3',
            'content' => 'required|min:3',
            'image' =>'mimes:png',
            'due_date' => 'required|date',
        ];
    }

    public function messages()
    {
       $messages = [
            'title.min' => ' Tên ít nhất là 3 chữ cái',
            'content.min' => 'Nội dung ít nhất là 3 chữ cái',
            'image.mimes' => 'Phải là định dạng JPEG,JPG,PNG',
            'due_date.date' => 'Phải là định dạng ngày giờ',
        ];
        return $messages;
    }

}
