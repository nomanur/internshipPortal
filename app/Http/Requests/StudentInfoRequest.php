<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentInfoRequest extends FormRequest
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
            'internship_semester'=>'required',
            'till_now_completed_credits'=>'required',
            'specification'=>'required',
            'internship_arranged_by'=>'required',
            'result_till_now'=>'required',
            'int_strarting_date'=>'required',
        ];
    }
}
