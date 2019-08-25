<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laramore\Traits\Model\HasLaramore;
use Laramore\Fields\{
    PrimaryId, Foreign, Char
};

class Contact extends Model
{
    use HasLaramore;

    protected static function __meta($meta)
    {
        $meta->id = PrimaryId::field();
        $meta->user = Foreign::field()->on(User::class);
        $meta->name = Char::field();
        $meta->value = Char::field();

        $meta->unique($meta->user, $meta->name);
    }
}
