<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laramore\Traits\Model\HasLaramore;
use Laramore\Fields\{
    PrimaryId, Char, Boolean, Foreign
};

class Group extends Model
{
    use HasLaramore;

    protected static function __meta($meta)
    {
        $meta->id = PrimaryId::field();
        $meta->name = Char::field()->unique();
        $meta->admin = Boolean::field();
        $meta->creator = Foreign::field()->on(User::class)->reversedName('createdGroups')->nullable();
        $meta->contact = Foreign::field()->on(Contact::class)->nullable();
        $meta->adminUser = Foreign::field()->on(User::class)->reversedName('adminGroups')->nullable();

        $meta->unique('name', 'admin');
    }
}
