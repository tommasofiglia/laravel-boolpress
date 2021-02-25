<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {

          // Aggiunta della foreign key per collegare il category_id all'id degli elementi in category
          $table->unsignedBigInteger('category_id')->after('id')->nullable();
          $table->foreign('category_id')->references('id')->on('categories');

          // Aggiunta della foreign key per collegare il tag_id all'id degli elementi in tag
          $table->unsignedBigInteger('tag_id')->after('id')->nullable();
          $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign('articles_category_id_foreign');
            $table->dropColumn('category_id');

            $table->dropForeign('articles_tag_id_foreign');
            $table->dropColumn('tag_id');
        });
    }
}
