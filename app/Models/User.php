<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laramore\Traits\Model\HasLaramore;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laramore\Fields\{
    PrimaryId, Char, Email, Password, Foreign, ManyToMany, Uuid
};

class User extends Authenticatable
{
    use Notifiable, HasLaramore;

    protected static function __meta($meta)
    {
        $meta->id = PrimaryId::field();
        $meta->uuid = Uuid::field()->autoGenerate();
        $meta->name = Char::field()->length(80);
        $meta->email = Email::field()->unique()->cdn('laramore.org');
        $meta->password = Password::field();
        $meta->groups = ManyToMany::field()->on(Group::class)->nullable();

        $meta->useTimestamps();
    }
}
