<?php

namespace Emtudo\Units\Links\Http\Requests;

use Emtudo\Support\Http\Request;

class CreateLinkRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'url'  => 'required|url|min:10|max:255',
            'slug' => 'sometimes|min:10|max:255',
        ];
    }
}
