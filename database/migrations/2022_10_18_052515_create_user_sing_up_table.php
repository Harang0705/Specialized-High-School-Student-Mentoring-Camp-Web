<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSingUpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_sing_up', function (Blueprint $table) {
            $table->id();
            $table->string('user_name')->comment('이름');
            $table->string('user_number', 4)->comment('유저 고유번호 4자리 (로그인시 활용됨)');
            $table->string('student_state')->comment('재학생 / 졸업생 여부 [ 0 : 재학생 / 1 : 졸업생 ]');
            $table->string('affiliation')->comment('계열 / config/affiliation.php 확인 필요');
            $table->string('university_state')->comment('대학교 진학여부 [ 0 : 미진학예정 or 바로 취업 / 1 : 미진학예정 or 바로 취업 ]');
            $table->string('specialize_state')->comment('고등학교 전공 유지 여부 [ 0 : 유지를 희망하지 않음 / 1 : 유지 ]');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_sing_up');
    }
}
