<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSingUp extends Model
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
     *  'affiliation' => 유저의 계열 config/affiliation.php 확인 필요
     *  'universityState' => 대학교 진학여부 [ 0 : 미진학 / 1 : 진학 ]
     *  'specializeState' => 고등학교 전공 유지 여부 [ 0 : 유지 / 1 : 비유지 ]
     * ]
     */
    public static function upload($userInformation) 
    {
        $random_number = rand(1111, 9999);

        $value = UserSingUp::create([
            'user_name' => $userInformation['userName'],
            'user_number' => $random_number,
            'student_state' => $userInformation['studentState'],
            'affiliation' => $userInformation['affiliation'],
            'university_state' => $userInformation['universityState'],
            'specialize_state' => $userInformation['specializeState']
        ]);

        return [
            'user_number' => $random_number
        ];
    }
}
