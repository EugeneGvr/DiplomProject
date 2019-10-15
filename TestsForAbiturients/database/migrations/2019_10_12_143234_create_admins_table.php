<?php

use App\Admin;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        //Create administrators
        $firstAdmin = new Admin();
        $firstAdmin
            ->setAttribute('first_name', 'Евгений')
            ->setAttribute('second_name', 'Гаврилов')
            ->setAttribute('email', 'link6596@gmail.com')
            ->setAttribute('password', Hash::make('ubuntu123'))
            ->save();

        $firstAdmin = new Admin();
        $firstAdmin
            ->setAttribute('first_name', 'Иван')
            ->setAttribute('second_name', 'Великий')
            ->setAttribute('email', 'link6596@gmail.com')
            ->setAttribute('password', Hash::make('ubuntu123'))
            ->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
