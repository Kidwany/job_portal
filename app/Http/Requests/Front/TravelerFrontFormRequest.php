<?php

namespace App\Http\Requests\Front;
use App\Http\Requests\Request;

class TravelerFrontFormRequest extends Request
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
            'first_name' => 'required|max:80',
            //'last_name' => 'required|max:80',
            'email' => 'required|email|max:100',
            'date_of_birth' => 'required',
            
            'gender_id' => 'required|int',
            'nationality_id' => 'required|int',
            'marital_status_id' => 'required|int',
            'industry_id' => 'required|int',

            'country_id' => 'required|int',
            'state_id' => 'required|int',
            //'city_id' => 'required',
            'phone' => 'required|max:18',
            
            // 'national_id_card_number' => 'required|max:80',
            // 'mobile_num' => 'required|max:22',
            // 'street_address' => 'required|max:230',
            'image' => 'image',
        ];
    }

    public function messages()
    {
        return [
            
            'first_name.required' => __('First Name is required'),
            //'last_name.required' => __('Last Name is required'),
            'email.required' => __('Email is required'),
            'email.email' => __('The email must be a valid email address'),
            
            'date_of_birth.required' => __('Date of birth is required'),
            'gender_id.required' => __('Please select gender'),
            'nationality_id.required' => __('Please select nationality'),
            'marital_status_id.required' => __('Please select marital status'),
            
            'country_id.required' => __('Please select country'),
            'industry_id.required' => __('Please select Industry'),
            'state_id.required' => __('Please select state'),
            'city_id.required' => __('Please select city'),
            'phone.required' => __('Please enter phone'),

            // 'national_id_card_number.required' => __('National ID card# required'),
            // 'mobile_num.required' => __('Please enter mobile number'),
            // 'street_address.required' => __('Please enter street address'),
            'image.image' => __('Only images can be uploaded'),
        ];
    }

}
