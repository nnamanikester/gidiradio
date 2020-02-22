<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\SiteSetting;

class ApiUpdateSpaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function role(Request $request, Role $role, $id)
    {
        header('Access-Control-Allow-Origin: *');
        $data = $role->findOrFail($id);
        $data->name = $request->name;
        $data->guard_name = $request->guard_name;
        $data->save();
        return response()->json($data);
    }

    public function site_settings(Request $request, SiteSetting $setting, $id)
    {
        header('Access-Control-Allow-Origin: *');
        $info = $setting->findOrFail($id);

        $info->site_name = $request->site_name;
        $info->logo = $request->logo;
        $info->favico = $request->favico;
        $info->link = $request->link;
        $info->email = $request->email;
        $info->phone = $request->phone;
        $info->footer_text = $request->footer_text;
        $info->signboard_title = $request->signboard_title;
        $info->signboard_button_text = $request->signboard_button_text;
        $info->signboard_button_link = $request->signboard_button_link;
        $info->signboard_image = $request->signboard_image;
        $info->default_thumbnail = $request->default_thumbnail;
        $info->tag_line = $request->tag_line;
        $info->facebook = $request->facebook;
        $info->twitter = $request->twitter;
        $info->instagram = $request->instagram;
        $info->radio_station = $request->radio_station;

        $info->save();

        return response()->json($info);
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
