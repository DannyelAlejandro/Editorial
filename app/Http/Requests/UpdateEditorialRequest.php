<?php

namespace App\Http\Requests;

use App\Models\Editorial;
use Illuminate\Foundation\Http\FormRequest;

class UpdateEditorialRequest extends FormRequest
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
        $rules = Editorial::$rules;
        
        return $rules;
    }
}
