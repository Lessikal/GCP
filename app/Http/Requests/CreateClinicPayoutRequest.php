<?php
/*
 * File name: CreateClinicPayoutRequest.php
 * Last modified: 2021.01.30 at 12:37:41
 * Author: SmarterVision - https://codecanyon.net/user/smartervision
 * Copyright (c) 2021
 */

namespace App\Http\Requests;

use App\Models\ClinicPayout;
use Illuminate\Foundation\Http\FormRequest;

class CreateClinicPayoutRequest extends FormRequest
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
        return ClinicPayout::$rules;
    }
}
