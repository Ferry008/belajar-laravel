<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tutors', function (Blueprint $table) {
            $table->unsignedBigInteger("keahlian_id");
            $table->foreignId('keahlian_id')->constrained('keahlians')->onDelete("casecade");
            $table->dropColumn("bidang_keahlian");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tutors', function (Blueprint $table) {
            $table->string('bidang_keahlian');
            $table->dropForeign('keahlian_id');
        });
    }
};
