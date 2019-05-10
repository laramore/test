<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laramore\Traits\Model\HasLaramore;
use Laramore\Fields\{
    PrimaryId, Text, Boolean
};

class Group extends Model
{
    use HasLaramore;

    protected static function __meta($meta, $fields)
    {
        $fields->id = PrimaryId::field();
        $fields->name = Text::field()->unique();
        $fields->admin = Boolean::field();
    }
}
