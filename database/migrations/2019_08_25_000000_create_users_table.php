<?php
/**
 * Generated with Laramore on 2019-08-25 10:25:51.
 *
 * @var    Illuminate\Database\Migrations\Migration
 * @model  App\Models\User
 */

use Laramore\Facades\Schema;
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
            $table->increments("id");
            $table->binaryUuid("uuid");
            $table->char("name")->length(80);
            $table->char("email")->unique(true);
            $table->char("password");
            $table->timestamp("created_at")->useCurrent(true);
            $table->timestamp("updated_at")->nullable(true);
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
