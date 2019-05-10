<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laramore\Traits\Model\HasLaramore;
use Laramore\Fields\{
    PrimaryId, Foreign, Text
};

class Contact extends Model
{
    use HasLaramore;

    protected static function __meta($meta, $fields)
    {
        $fields->id = PrimaryId::field();
        $fields->user = Foreign::field()->on(User::class);
        $fields->name = Text::field();
        $fields->value = Text::field();
    }
}
