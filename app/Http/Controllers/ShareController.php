<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Share;
use Auth;
use File;
use Image;

class ShareController extends Controller
{
    public function index()
    {
        $shares = Share::inRandomOrder()->paginate(500);
     
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
        $iduser = Share::select('users.id')->from('users')->join('shares', 'users.email', '=', 'shares.Email_of_user')->where('shares.Email_of_user', $email)->get();
   
       //return response()->json($iduserA);
       return view('item', compact('data', 'itemuser', 'history','iduser'));
    }

    public function myprofile()
    {
        $email = Auth::user()->email;
        $iduser = Auth::user()->id;
        $data = Share::where('Email_of_user', $email)->get();

        $history = Share::select('shares.id','shares.Name','shares.Name_of_user','download_history.created_at', 'shares.file')->from('shares')->join('download_history', 'shares.id', '=', 'download_history.id_image')->where('download_history.id_user', $iduser)->get();

        //return response()->json($email);
        return view('myprofile', compact('data', 'history'));
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
            $imageResize = Image::make($request->file('file'))->encoder('png', 10);
            $imageResize->move(public_path('share_image'), $filename);
             $share = share::create([
            'file' => $filename,
            'Name' => $request->name,
            'Description' => $request->description,
            'Category' => $request->category,
            'Name_of_user' => $request->Name_of_user,
            'Email_of_user' => $request->Email_of_user
        ]);
            return redirect()->route('explore');
        }else{
            json('error');
        }

        
    }

    public function delete($id)
    {
        // hapus file
        $image = share::where('id',$id)->first();
        File::delete('share_image/'.$image->file);
        // hapus data
        share::where('id',$id)->delete();
        return redirect()->route('delete.history', $id);
    }

    public function edititem($id)
    {
        $data = Share::findOrFail($id);
       $email = Auth::user()->email;
        $emailitem = $data->Email_of_user;
        if ($email == $emailitem)
        {
            return view('edititem', compact('data'));
        }else{
            return response()->json('Access denied');
        };
    }

    public function updateitem(Request $request, $id)
    {
        
        $update = Share::where('id', $request->id)->update([
            'Name' => $request->name,
            'Description' => $request->description,
            'Category' => $request->category,
          ]);
        return redirect()->route('item', ['id'=>$request->id]);
    }

    public function profile($id)
    {
        
        $datauser = Share::select('users.id','users.email','users.name','users.created_at')->from('shares')->join('users', 'shares.Email_of_user', '=', 'users.email')->where('users.id', $id)->get();
        $email = $datauser[0]->email;
        $iduser = $datauser[0]->id;
        $data = Share::where('Email_of_user', $email)->get();
        $history = Share::select('shares.id','shares.Name','shares.Name_of_user','download_history.created_at', 'shares.file')->from('shares')->join('download_history', 'shares.id', '=', 'download_history.id_image')->where('download_history.id_user', $id)->get();

        //return response()->json($email);
        return view('myprofile', compact('data', 'history', 'datauser'));
    }

    public function userprofile($id)
    {
        
        $datauser = Share::select('users.id','users.email','users.name','users.created_at')->from('shares')->join('users', 'shares.Email_of_user', '=', 'users.email')->where('users.id', $id)->get();
        $email = $datauser[0]->email;
        $iduser = $datauser[0]->id;
        $value = $datauser[0];
        $data = Share::where('Email_of_user', $email)->get();
        $history = Share::select('shares.id','shares.Name','shares.Name_of_user','download_history.created_at', 'shares.file')->from('shares')->join('download_history', 'shares.id', '=', 'download_history.id_image')->where('download_history.id_user', $id)->get();

        //return response()->json($email);
        return view('userprofile', compact('data', 'history', 'value'));
    }

    // public function popular(DownloadHistoryController $data)
    // {
    //     return response()->json($data);
    // }
}