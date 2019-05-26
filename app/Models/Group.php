<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laramore\Traits\Model\HasLaramore;
use Laramore\Fields\{
    PrimaryId, Char, Boolean, Foreign, ForeignUuid
};

class Group extends Model
{
    use HasLaramore;

    protected static function __meta($meta, $fields)
    {
        $fields->id = PrimaryId::field();
        $fields->name = Char::field()->unique();
        $fields->admin = Boolean::field();
        $fields->creator = ForeignUuid::field()->on(User::class)->nullable();
        $fields->contact = Foreign::field()->on(Contact::class)->nullable();
        $fields->adminUser = ForeignUuid::field()->on(User::class)->reversedName('adminGroups')->nullable();

        $meta->unique('name', 'admin');
    }
}
