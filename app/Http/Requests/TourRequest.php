<?php

namespace App\Http\Requests;

use Carbon\Doctrine\DateTimeType;
use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             'name' => 'required|min:3|max:25',
             'tour_date'=>'date',
             'durance'=>'starts_with:01,02,03,04,05,06,07,08,09,10,15,20|ends_with:day,days|max:7',
             'transports'=>'required',
             'organizers'=>'required',
             'image'=>'image|nullable'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
           //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }




}
