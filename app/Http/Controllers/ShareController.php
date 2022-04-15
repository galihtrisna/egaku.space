<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Share;

class ShareController extends Controller
{
    public function index()
    {
        $shares = Share::all();
     
        return view('explore', compact('shares'));
    }

    public function tambahshare()
    {
        return view('tambahshare');
    }

    public function simpanshare(Request $request)
    {
        $request->validate([
            'file' => 'required',
            'file.*' => 'mimes:jpg,jpeg,png|max:5000'
        ]);

        if ($request->hasfile('file')) {            
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('file')->getClientOriginalName());
            $request->file('file')->move(public_path('share_image'), $filename);
             $share = share::create([
            'file' => $filename,
            'Name' => $request->name,
            'Description' => $request->description,
            'Category' => $request->category,
            'Name_of_user' => $request->Name_of_user,
            'Email_of_user' => $request->Email_of_user
        ]);
            echo'Success';
        }else{
            echo'Gagal';
        }

        return redirect()->route('explore');
    }
}