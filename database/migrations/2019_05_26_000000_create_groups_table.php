<?php
/**
 * Generated with Laramore on 2019-05-26 14:04:18.
 *
 * @var    Illuminate\Database\Migrations\Migration
 * @model  App\Models\Group
 */

use Illuminate\Support\Facades\Schema;
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
            $table->char("name")->length(255)->unique(true);
            $table->boolean("admin");
            $table->binaryUuid("creator_id")->nullable(true);
            $table->unsignedInteger("contact_id")->nullable(true);
            $table->binaryUuid("admin_user_id")->nullable(true);
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
