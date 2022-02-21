<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
        });

        DB::table('users')->insert([
                'name' => 'Savio Renato',
                'email' => 'saviorenato@domain.com',
                'password' =>  Hash::make('102030')
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
