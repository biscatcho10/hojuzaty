<?php

namespace Modules\Frontend\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class InquiryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'second_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:255',
            'check_in' => 'required|date|after:today',
            'days' => 'required|integer',
            'check_out' => 'required|date',
            'message' => 'required|string',
        ];
    }
    

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    // prepare the data for validation
    protected function prepareForValidation()
    {
        if ($this->has('check_in') && $this->has('days') && $this->days > 0) {
            $this->merge([
                'check_out' => date('Y-m-d', strtotime($this->check_in . ' + ' . $this->days . ' days'))
            ]);
        }
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required' => __('frontend::frontend.first_name_required'),
            'second_name.required' => __('frontend::frontend.second_name_required'),
            'email.required' => __('frontend::frontend.email_required'),
            'email.email' => __('frontend::frontend.email_email'),
            'phone.required' => __('frontend::frontend.phone_required'),
            'check_in.required' => __('frontend::frontend.check_in_required'),
            'check_in.after' => __('frontend::frontend.check_in_after'),
            'check_out.required' => __('frontend::frontend.check_out_required'),
            'days.required' => __('frontend::frontend.days_required'),
            'days.integer' => __('frontend::frontend.days_integer'),
            'message.required' => __('frontend::frontend.message_required'),
        ];
    }


    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => 'error',
            'message' => $validator->errors()->first()
        ], 422));
    }
}
