<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lastname');
            $table->string('email')->unique(); // Added unique constraint for email
            $table->string('password'); // Changed 'Int' to 'string' for password
            $table->timestamps(); // Changed 'created_at()' and 'updated_at()' to 'timestamps()'
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Reset the auto-increment counter to 1 for the 'students' table
        DB::statement('ALTER TABLE students AUTO_INCREMENT = 1');
        Schema::dropIfExists('students'); // Remove the underscore before 'students'
    }
};
