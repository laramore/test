<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laramore\Traits\Model\HasLaramore;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laramore\Fields\{
    PrimaryId, Text, Email, Password, Foreign
};

class User extends Authenticatable
{
    use Notifiable, HasLaramore;

    protected static function __meta($meta, $fields) {
        $fields->id = PrimaryId::field();
        $fields->name = Text::field();
        $fields->email = Email::field()->unique()->cdn('laramore.com');
        $fields->password = Password::field();
        $fields->group = Foreign::field()->nullable()->on(Group::class);

        $meta->useTimestamps();
    }
}
