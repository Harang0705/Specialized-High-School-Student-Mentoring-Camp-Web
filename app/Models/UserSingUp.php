<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Psy\Exception\ThrowUpException;

class UserSingUp extends Authenticatable
{
    use HasFactory;

    protected $table = "user_sing_up";
    protected $fillable = [
        'user_name',
        'user_number',
        'student_state',
        'affiliation',
        'university_state',
        'specialize_state',
    ];

    /**
     * $userInformation = [
     *  'studentState' => 재학생 / 졸업생 여부 [ 0 : 재학생 / 1 :졸업생 ]
     *  'userName' => 유저 이름
     *  'email' => 유저 이메일,
     *  'password' => 유저 비밀번호,
     *  'affiliation' => 유저의 계열 config/affiliation.php 확인 필요
     *  'universityState' => 대학교 진학여부 [ 0 : 미진학 / 1 : 진학 ]
     *  'specializeState' => 고등학교 전공 유지 여부 [ 0 : 유지 / 1 : 비유지 ]
     * ]
     * 
     * return [
     *  'user_number' => user 에 부여되는 랜덤한 4자리의 정수 (1111 ~ 9999) 
     * ]
     */
    public static function upload(array $userInformation) 
    {
        try {
            UserSingUp::create([
                'user_name' => $userInformation['userName'],
                'email' => $userInformation['userEmail'],
                'password' => $userInformation['userPassword'],
                'student_state' => $userInformation['studentState'],
                'affiliation' => $userInformation['affiliation'],
                'university_state' => $userInformation['universityState'],
                'specialize_state' => $userInformation['specializeState']
            ]);
        } catch (ThrowUpException $th) {
            return $th;
        }
        
        return [
            'user_number' => 1
        ];
    }
}
