<?php
/**
 * Generated with Laramore on 2019-05-26 14:04:18.
 *
 * @var    Illuminate\Database\Migrations\Migration
 * @model  App\Models\User
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create("users", function (Blueprint $table) {
            $table->binaryUuid("id")->primary(true);
            $table->char("name")->length(80);
            $table->char("email")->length(255)->unique(true);
            $table->char("password")->length(255);
            $table->unsignedInteger("group_id")->nullable(true);
            $table->timestamp("created_at")->useCurrent(true);
            $table->timestamp("updated_at")->nullable(true);

	        $table->foreign("group_id")->references("id")->on("groups");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::dropIfExists("users");
    }
}
