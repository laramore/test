<?php
/**
 * Generated with Laramore on 2019-08-25 10:25:51.
 *
 * @var    Illuminate\Database\Migrations\Migration
 * @model  Laramore\FakePivot
 */

use Laramore\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create("users_groups", function (Blueprint $table) {
            $table->unsignedInteger("user_id");
            $table->unsignedInteger("group_id");

	        $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("group_id")->references("id")->on("groups");

	        $table->unique(["user_id","group_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::dropIfExists("users_groups");
    }
}
