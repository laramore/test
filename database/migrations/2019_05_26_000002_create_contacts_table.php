<?php
/**
 * Generated with Laramore on 2019-05-26 14:04:18.
 *
 * @var    Illuminate\Database\Migrations\Migration
 * @model  App\Models\Contact
 */

use Illuminate\Support\Facades\Schema;
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
            $table->binaryUuid("user_id");
            $table->char("name")->length(255);
            $table->char("value")->length(255);

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
