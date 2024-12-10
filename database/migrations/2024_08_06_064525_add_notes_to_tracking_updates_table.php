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
        Schema::table('tracking_updates', function (Blueprint $table) {
            $table->text('notes')->nullable()->after('description'); // Add the notes column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tracking_updates', function (Blueprint $table) {
            $table->dropColumn('notes'); // Drop the notes column
        });
    }
};
