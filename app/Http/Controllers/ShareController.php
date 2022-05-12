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

    public function search(Request $request)
    {
        $shares = Share::where('Name', 'LIKE', '%'.$request->search.'%')->orWhere('Description', 'LIKE', '%'.$request->search.'%')->get();
     
        return view('explore', compact('shares'));
    }

    public function item($id)
    {
        $data = Share::find($id);
        $email = $data->Email_of_user;
        $name = $data->Name;
        $itemuser = Share::where('Email_of_user', $email)->inRandomOrder()->limit(6)->get();
        $history = Share::select('users.name','download_history.created_at')->from('download_history')->join('users', 'download_history.id_user', '=', 'users.id')->where('download_history.id_image', $id)->get();

       //return response()->json($history);

       return view('item', compact('data', 'itemuser', 'history'));
    }

    public function download($id)
    {
        $data = Share::find($id);

        return response()->download('share_image/'.$data->file);
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