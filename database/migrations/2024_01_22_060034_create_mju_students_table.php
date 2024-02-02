<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mjustudent', function (Blueprint $table) {
            $table->string('student_code', 15)->primary()->nullable()->default(null);
            $table->string('first_name', 50)->notNull();
            $table->string('last_name', 50)->default('');
            $table->string('first_name_en', 50)->notNull();
            $table->string('last_name_en', 50)->default('');
            $table->unsignedBigInteger('major_id')->foreign()->notNull();
            $table->string('idcard', 20)->notNull();
            $table->date('birthdate')->nullable()->default(null);
            $table->string('gender',1)->nullable()->default('');
            $table->string('address', 500)->nullable()->default('');
            $table->string('phone', 50)->nullable()->default('');
            $table->string('email', 50)->nullable()->default('');
            $table->string('nick_name' ,50)->nullable()->default('');
            // Add other fields as needed
            $table->timestamps();

            // define foreign key constant
            $table->foreign('major_id')->references('major_id')->on('majors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('mjustudent');

        Schema::table('mjustudent', function (Blueprint $table) {
            // drop foreign key constraint
            $table->dropForeign(['major_id']);
        });
    }
};
