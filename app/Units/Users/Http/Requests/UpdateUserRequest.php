<?php

namespace Emtudo\Units\Users\Http\Requests;

use Emtudo\Support\Http\Request;

class UpdateUserRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'     => 'required|min:3|max:255',
            'email'    => 'required|email|max:255',
            'password' => 'required|min:6|max:255',
        ];
    }
}
