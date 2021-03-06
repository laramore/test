<?php
/**
 * Generated with Laramore on 2019-08-25 10:25:51.
 *
 * @var    Illuminate\Database\Migrations\Migration
 * @model  App\Models\Contact
 */

use Laramore\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create("contacts", function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("user_id");
            $table->char("name");
            $table->char("value");

	        $table->foreign("user_id")->references("id")->on("users");

	        $table->unique(["user_id","name"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::dropIfExists("contacts");
    }
}
