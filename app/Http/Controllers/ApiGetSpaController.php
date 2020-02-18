<?php

namespace App\Http\Controllers;

use App\Oap;
use App\Blog;
use App\Episode;
use App\Asitdrop;
use App\Programme;
use App\SiteSetting;
use Illuminate\Http\Request;

class ApiGetSpaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function site_settings()
    {

        header('Access-Control-Allow-Origin: *');
        return response()->json([SiteSetting::find(1)]);

    }

    public function programmes()
    {
        header('Access-Control-Allow-Origin: *');
        $programmes = Programme::with('episodes', 'oap', 'comments', 'views', 'user')->get();
        return response()->json($programmes);
    }

    public function episodes(Episode $episode)
    {
        header('Access-Control-Allow-Origin: *');
        return response()->json($episode->with('programme', 'oap', 'user', 'views', 'plays', 'comments')->get());
    }

    public function blogs(Blog $blog)
    {
        header('Access-Control-Allow-Origin: *');
        return response()->json($blog->with('comments', 'user', 'views')->get());
    }

    public function asitdrops(Asitdrop $aid)
    {
        header('Access-COntrol-Allow-Origin: *');
        return response()->json($aid->with('user', 'plays')->get());
    }

    public function oaps(Oap $oap)
    {
        header('Access-Control-Allow-Origin: *');
        return response()->json($oap->with('programmes', 'episodes', 'socials')->get());
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
