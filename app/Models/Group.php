<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laramore\Traits\Model\HasLaramore;
use Laramore\Fields\{
    PrimaryId, Boolean
};

class Group extends Model
{
    use HasLaramore;

    protected static function __meta($schema, $fields) {
        $fields->id = PrimaryId::field();
        $fields->admin = Boolean::field();
    }
}
