<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PostRequest extends FormRequest
{

    public function authorize()
    {
        if (Auth::check() && Auth::user()->isAdmin()){

            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'         => 'required',
            'body'          => 'required',
            'iscompleted'   => 'required',

        ];
    }
}







