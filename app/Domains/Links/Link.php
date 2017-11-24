<?php

namespace Emtudo\Domains\Links;

use Emtudo\Domains\UserModel;

class Link extends UserModel
{
    public $fillable = [
       'url',
    ];
}
