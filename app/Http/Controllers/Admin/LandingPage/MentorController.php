<?php

namespace App\Http\Controllers\Admin\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    /**
     * showToLandingPage
     *
     * @param  mixed $id
     * @return void
     */
    public function showToLandingPage($id)
    {
        $check = User::where('isShown', 1)->count();
        if ($check < 3) {
            $user = User::where('id', $id)->update(['isShown' => 1]);
            $user = User::find($id);
            return redirect()->back()->with('success', $user->name . ' berhasil ditampilkan pada halaman utama!');
        }
        return redirect()->back()->with('fail', 'Tolong Unshow 1 atau lebih Mentor yang terdapat pada Top Mentors!');
    }

    /**
     * unshowToLandingPage
     *
     * @param  mixed $id
     * @return void
     */
    public function unshowToLandingPage($id)
    {
        $user = User::where('id', $id)->update(['isShown' => 0]);
        $user = User::find($id);
        return redirect()->back()->with('fail', $user->name . ' berhasil tidak ditampilkan pada halaman utama!');
    }
}
