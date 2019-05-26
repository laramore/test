<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laramore\Traits\Model\HasLaramore;
use Laramore\Fields\{
    PrimaryId, ForeignUuid, Char
};

class Contact extends Model
{
    use HasLaramore;

    protected static function __meta($meta, $fields)
    {
        $fields->id = PrimaryId::field();
        $fields->user = ForeignUuid::field()->on(User::class);
        $fields->name = Char::field();
        $fields->value = Char::field();

        $meta->unique($fields->user, $fields->name);
    }
}
