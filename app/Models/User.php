<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // 'users' 테이블을 사용하도록 설정 (기본값은 'users'이므로 생략 가능)
    protected $table = 'user_mng';

    // 대량 할당 가능한 필드 설정
    protected $fillable = ['id', 'pwd', 'name', 'age'];

    // 타임스탬프 사용 설정 (기본값은 true이므로 생략 가능)
    public $timestamps = true;
}