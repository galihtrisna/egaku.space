<?php

namespace App\Http\Controllers;

use App\Models\download_history;
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
