<?php

namespace App\Models;

use Laramore\Fields\{
    PrimaryId, Char, Email, Password, Foreign, Boolean, ManyToMany, Uuid
};

class Admin extends User
{
    protected static function __meta($meta)
    {
        // $meta->relateToParent();

        $meta->permissions = Char::field();
        $meta->corentin = Boolean::field();

        $meta->useTimestamps();
    }
}
