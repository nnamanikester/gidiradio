<?php

namespace App\Http\Controllers;

use App\Role;
use App\Advert;
use App\SiteSetting;
use App\Programme;
use App\Episode;
use App\Asitdrop;
use App\Oap;
use App\Blog;
use App\HeaderImage;
use App\User;
use Illuminate\Http\Request;

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
        $data = $programme->findOrFail($id);
        if ($file = $request->file('image')) {
            if (file_exists('images/programmes/' . $data->image)) {
                unlink('images/programmes/' . $data->image);
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('images/programmes', $name);
            $data->image = $name;
        }
        $data->title = $request->title;
        $data->details = $request->details;
        $data->user_id = 1;
        $data->oap_id = $request->oap_id;
        $data->slug = $request->slug;
        $data->save();

        return response()->json($data);
    }

    public function episode(Request $request, Episode $episode, $id)
    {
        header('Access-Control-Allow-Origin: *');
        $data = $episode->findOrFail($id);
        if ($file = $request->file('image')) {
            if (file_exists('images/programmes/episodes/' . $data->image)) {
                unlink('images/programmes/episodes/' . $data->image);
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('images/programmes/episodes', $name);
            $data->image = $name;
        }
        if ($file = $request->file('audio')) {
            if (file_exists('audio/episodes/' . $data->audio)) {
                unlink('audio/episodes/' . $data->audio);
            }
            $name = time() . '_'. $file->getClientOriginalName();
            $file->move('audio/episodes', $name);
            $data->audio = $name;
        }
        $data->title = $request->title;
        $data->details = $request->details;
        $data->user_id = 1;
        $data->oap_id = $request->oap_id;
        $data->slug = $request->slug;
        $data->programme_id = $request->programme_id;
        $data->save();

        return response()->json($data);
    }

    public function asitdrop(Request $request, Asitdrop $music, $id)
    {
        header('Access-Control-Allow-Origin: *');
        $data = $music->findOrFail($id);
        if ($file = $request->file('image')) {
            if (file_exists('images/audio/' . $data->image)) {
                unlink('images/audio/' . $data->image);
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('images/audio', $name);
            $data->image = $name;
        }
        if ($file = $request->file('audio')) {
            if (file_exists('audio/asitdrops/' . $data->audio)) {
                unlink('audio/asitdrops/' . $data->audio);
            }
            $name = time() . '_'. $file->getClientOriginalName();
            $file->move('audio/asitdrops', $name);
            $data->audio = $name;
        }
        $data->title = $request->title;
        $data->artist = $request->artist;
        $data->user_id = 1;

        $data->save();

        return response()->json($data);
    }

    public function oap(Request $request, Oap $oap, $id)
    {
        header('Access-Control-Allow-Origin: *');
        $data = $oap->findOrFail($id);
        if ($file = $request->file('image')) {
            if (file_exists('images/oaps/' . $data->image)) {
                unlink('images/oaps/' . $data->image);
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('images/oaps', $name);
            $data->image = $name;
        }
        $data->name = $request->name;
        $data->title = $request->title;
        $data->display_name = $request->display_name;
        $data->slug = $request->slug;
        $data->email = $request->email;
        $data->bio = $request->bio;
        $data->save();

        return response()->json($data);

    }

    public function blog(Blog $blog, Request $request, $id)
    {
        header('Access-Control-Allow-Origin: *');
        $data = $blog->findOrFail($id);
        if ($file = $request->file('image')) {
            if (file_exists('images/blogs/' . $data->image)) {
                unlink('images/blogs/' . $data->image);
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('images/blogs', $name);
            $data->image = $name;
        }
        $data->title = $request->title;
        $data->slug = $request->slug;
        $data->body = $request->body;
        $data->user_id = 1;
        $data->save();

        return response()->json($data);
    }

    public function header_image(HeaderImage $header, Request $request, $id)
    {
        header('Access-Control-Allow-Origin: *');
        $data = $header->findOrFail($id);
        if ($file = $request->file('image')) {
            if (file_exists('images/header/' . $data->image)) {
                unlink('images/header/' . $data->image);
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('images/header', $name);
            $data->image = $name;
        }
        if ($request->active == "true") {
            $request->active = 1;
        } else {
            $request->active = 0;
        }
        $data->user_id = 1;
        $data->button_text = $request->button_text;
        $data->button_link = $request->button_link;
        $data->title = $request->title;
        $data->content = $request->content;
        $data->active = $request->active;
        $data->save();

        return response()->json($data);
    }

    public function user(Request $request, User $user, $id)
    {
        header('Access-Control-Allow-Origin: *');
        $data = $user->findOrFail($id);
        if ($file = $request->file('image')) {
            if (file_exists('images/users/' . $data->image)) {
                unlink('images/users/' . $data->image);
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('images/users', $name);
            $data->image = $name;
        }
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email =  $request->email;
        $data->country = $request->country;
        $data->state = $request->state;
        $data->bio = $request->bio;
        if ($request->password) {
            $data->password = bcrypt($request->password);
        }
        $data->save();
        return response()->json($data);
    }

}
