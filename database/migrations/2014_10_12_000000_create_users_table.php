<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role')->default('ngo');
            $table->string('email')->unique();
            $table->string('district')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('organization_address')->nullable();
            $table->string('org_ic_pdf')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile')->unique()->nullable();
            $table->string('mip_pdf')->nullable();
            $table->string('wp_number')->nullable();
            $table->string('md_org')->nullable();
            $table->string('gender')->nullable();
            $table->string('org_logo')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
