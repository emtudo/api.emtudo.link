<?php

namespace Emtudo\Domains;

abstract class UserModel extends Model
{
    public static function boot()
    {
        parent::boot();

        self::saving(function ($model) {
            if (empty($model->user_id)) {
                $model->setUser();
            }
        });
    }

    public function setUser()
    {
        $user = auth()->user();
        if ($user) {
            $this->user_id = $user->id;
        }
    }
}
