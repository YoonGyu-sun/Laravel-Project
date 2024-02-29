<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class userController extends Controller
{
    public function store(Request $request){
        $validatedData = $request->validate([
            'uid' => 'required|max:50',
            'upw' => 'required|max:200',
            'uname' => 'required|max:200',
            'uage' => 'nullable|integer',
        ]);

         // 사용자 모델 생성 및 저장
         $user = new User;
         $user->id = $validatedData['uid'];
         $user->pwd = bcrypt($validatedData['upw']); // 비밀번호는 암호화하여 저장
         $user->name = $validatedData['uname'];
         $user->age = $validatedData['uage'];
         $user->save();
 
         // 저장 후 리디렉션, 또는 다른 처리
         return redirect()->back()->with('success', 'User saved successfully!');
    }
}
