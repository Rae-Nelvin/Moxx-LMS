<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request)
    {
        $data = $request->all();
        $user = User::where('id', '=', $data['id'])->first();
        $imageName = str_replace(' ', '-', $data['name']);
        $imagePath = $request->file('avatar')->store('/public/avatar/' . $user->role->name . '/' . $imageName);
        $imagePath = str_replace('public/', '', $imagePath);

        $photo = Photo::create([
            'types' => 'Avatar',
            'imageURL' => $imagePath,
        ]);

        $user->name = $data['name'];
        $user->avatar = $imagePath;
        $user->save();

        return redirect('/');
    }
}
