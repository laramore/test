<?php
/**
 * Generated with Laramore on 2019-08-25 10:25:51.
 *
 * @var    Illuminate\Database\Migrations\Migration
 * @model  App\Models\Group
 */

use Laramore\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create("groups", function (Blueprint $table) {
            $table->increments("id");
            $table->char("name")->unique(true);
            $table->boolean("admin");
            $table->unsignedInteger("creator_id")->nullable(true);
            $table->unsignedInteger("contact_id")->nullable(true);
            $table->unsignedInteger("admin_user_id")->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::dropIfExists("groups");
    }
}
