<?php

namespace App\Http\Controllers;

use App\Models\download_history;
use App\Models\Share;
use Illuminate\Http\Request;

class DownloadHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function download_history_item(Request $request)
    {
        $history = download_history::create($request->all());
        $history->save();
        $riwayat = download_history::where('id_user', $request->id_user)->get();

        return response()->download('share_image/'.$request->file);
        return redirect()->route('explore');
        //return response()->json($history);
    }

    public function download_history_show_item(Request $request){
        $history = download_history::where('Nama', $request->Name)->get();
        return view('item', compact('history'));
    }

    public function deletehistory(Request $request ,$id){
        download_history::where('id_image',$id)->delete();
        return redirect()->route('myprofile');
    }

    public function popular()
    {
        //$data = download_history::select('id_image')->from('download_history')->get();
        //$value = $data->count('*')->groupBy('id_image')-get();
        //$data = download_history::select('select id_image, count(*)')->from('download_history')->groupBy('id_image')->get();
        $data =
        download_history::selectRaw('id_image, COUNT(*) as jumlah')
        ->groupBy('id_image')
        ->orderBy('jumlah','desc')
        ->limit(6)
        ->get();

        $id = $data->pluck('id_image');
        $idd = $id;
        
        $post = Share::select('*')->where('id',$id[0])->orWhere('id',$id[1])->orWhere('id',$id[2])->orWhere('id',$id[3])->orWhere('id',$id[4])->orWhere('id',$id[5])->get();
        //$post = Share::select('*')->where('id',$id[0])->orWhere('id',$id[1])->get();
        //return response()->json($post);
        return view('welcome', compact('post'));
    }

    public function popular2()
    {
        //$data = download_history::select('id_image')->from('download_history')->get();
        //$value = $data->count('*')->groupBy('id_image')-get();
        //$data = download_history::select('select id_image, count(*)')->from('download_history')->groupBy('id_image')->get();
        $data =
        download_history::selectRaw('id_image, COUNT(*) as jumlah')
        ->groupBy('id_image')
        ->orderBy('jumlah','desc')
        ->limit(6)
        ->get();

        $id = $data->pluck('id_image');
        $idd = $id;
        
        $post = Share::select('*')->where('id',$id[0])->orWhere('id',$id[1])->orWhere('id',$id[2])->orWhere('id',$id[3])->orWhere('id',$id[4])->orWhere('id',$id[5])->get();
        //$post = Share::select('*')->where('id',$id[0])->orWhere('id',$id[1])->get();
        //return response()->json($post);
        return view('home', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\download_history  $download_history
     * @return \Illuminate\Http\Response
     */
    public function show(download_history $download_history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\download_history  $download_history
     * @return \Illuminate\Http\Response
     */
    public function edit(download_history $download_history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\download_history  $download_history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, download_history $download_history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\download_history  $download_history
     * @return \Illuminate\Http\Response
     */
    public function destroy(download_history $download_history)
    {
        //
    }
}
