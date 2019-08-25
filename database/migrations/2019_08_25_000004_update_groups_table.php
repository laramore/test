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

class UpdateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::table("groups", function (Blueprint $table) {
	        $table->foreign("creator_id")->references("id")->on("users");
            $table->foreign("admin_user_id")->references("id")->on("users");
            $table->foreign("contact_id")->references("id")->on("contacts");

	        $table->unique(["name","admin"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::table("groups", function (Blueprint $table) {
	        $table->dropForeign("groups_creator_id_foreign");
            $table->dropForeign("groups_admin_user_id_foreign");
            $table->dropForeign("groups_contact_id_foreign");

	        $table->dropUnique("groups_name_admin_unique");
        });
    }
}
