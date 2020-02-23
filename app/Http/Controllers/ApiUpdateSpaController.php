<?php

namespace App\Http\Controllers;

use App\Role;
use App\Advert;
use App\SiteSetting;
use Illuminate\Http\Request;

class ApiUpdateSpaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function handleFile($request_name)
    {
        if ($file = $request->file($request_name)) {
            $name = $file->getOriginalName();
            move('images/site-info', $name);
            // $info->$request_name = $name;
            return $name;
        }
    }

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
        $info->link = $request->link;
        $info->email = $request->email;
        $info->phone = $request->phone;
        $info->footer_text = $request->footer_text;
        $info->signboard_title = $request->signboard_title;
        $info->signboard_button_text = $request->signboard_button_text;
        $info->signboard_button_link = $request->signboard_button_link;
        $info->tag_line = $request->tag_line;
        $info->facebook = $request->facebook;
        $info->twitter = $request->twitter;
        $info->instagram = $request->instagram;
        $info->radio_station = $request->radio_station;
        if ($file = $request->file('logo')) {
            if (file_exists('images/site-info/' . $info->logo)) {
                unlink('images/site-info/' . $info->logo);
            }
            $name = $file->getClientOriginalName();
            $file->move('images/site-info', $name);
            $info->logo = $name;
        }
        if ($file = $request->file('favico')) {
            if (file_exists('images/site-info/' . $info->favico)) {
                unlink('images/site-info/' . $info->favico);
            }
            $name = $file->getClientOriginalName();
            $file->move('images/site-info', $name);
            $info->favico = $name;
        }
        if ($file = $request->file('default_thumbnail')) {
            if (file_exists('images/site-info/' . $info->default_thumbnail)) {
                unlink('images/site-info/' . $info->default_thumbnail);
            }
            $name = $file->getClientOriginalName();
            $file->move('images/site-info', $name);
            $info->default_thumbnail = $name;
        }
        if ($file = $request->file('signboard_image')) {
            if (file_exists('images/site-info/' . $info->signboard_image)) {
                unlink('images/site-info/' . $info->signboard_image);
            }
            $name = $file->getClientOriginalName();
            $file->move('images/site-info', $name);
            $info->signboard_image = $name;
        }
        $info->save();

        return response()->json($info);
    }

    public function advert(Request $request, $id, Advert $advert)
    {
        header('Access-Control-Allow-Origin: *');
        $data = $advert->findOrFail($id);
        if ($request->active == "true") {
            $request->active = 1;
        } else {
            $request->active = 0;
        }
        $data->title = $request->title;
        $data->content = $request->content;
        $data->active = $request->active;
        $data->user_id = 1;
        $data->save();
        return response()->json($request->all());
    }

    public function programme(Request $request, Programme $programme, $id)
    {
        header('Access-Control-Allow-Origin: *');
    }

}
