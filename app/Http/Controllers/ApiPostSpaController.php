<?php

namespace App\Http\Controllers;

use App\Role;
use App\Programme;
use App\Advert;
use App\Episode;
use App\Asitdrop;
use Illuminate\Http\Request;

class ApiPostSpaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function role(Request $request, Role $role)
    {
        header('Access-Control-Allow-Origin: *');
        $data = $role->create([
            'name' => $request->name,
            'guard_name' => $request->guard_name
        ]);
        return response()->json($role->where('id', $data->id)->first());
    }

    public function advert(Request $request, Advert $advert)
    {
        header('Access-Control-Allow-Origin: *');
        if ($request->active == "true") {
            $request->active = 1;
        } else {
            $request->active = 0;
        }
        $data = $advert->create([
            'user_id' => 1,
            'title' => $request->title,
            'content' => $request->content,
            'active' => $request->active
        ]);
        return response()->json($data);
    }

    public function programmes(Request $request, Programme $programme)
    {
        header('Access-Control-Allow-Origin: *');
        if ($file = $request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images/programmes', $name);
            $request->image = $name;
        }
        $data = $programme->create([
            'user_id' => 1,
            'oap_id' => $request->oap_id,
            'title' => $request->title,
            'slug' => $request->slug,
            'details' => $request->details,
            'image' => $request->image
        ]);
        return response()->json($data);
    }

    public function episodes(Request $request, Episode $episode)
    {
        header('Access-Control-Allow-Origin: *');
        if ($file = $request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images/programmes/episodes', $name);
            $request->image = $name;
        }
        if ($file = $request->file('audio')) {
            $name = time() . '_'. $file->getClientOriginalName();
            $file->move('audio/episodes', $name);
            $request->audio = $name;
        }
        $data = $episode->create([
            'user_id' => 1,
            'oap_id' => $request->oap_id,
            'title' => $request->title,
            'slug' => $request->slug,
            'details' => $request->details,
            'image' => $request->image,
            'audio' => $request->audio,
            'programme_id' => $request->programme_id
        ]);
        return response()->json($data);
    }

    public function asitdrops(Request $request, Asitdrop $music)
    {
        header('Access-Control-Allow-Origin: *');
        if ($file = $request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images/audio', $name);
            $request->image = $name;
        }
        if ($file = $request->file('audio')) {
            $name = time() . '_'. $file->getClientOriginalName();
            $file->move('audio/asitdrops', $name);
            $request->audio = $name;
        }
        $data = $music->create([
            'user_id' => 1,
            'title' => $request->title,
            'artist' => $request->artist,
            'image' => $request->image,
            'audio' => $request->audio
        ]);
        return response()->json($data);
    }

    public function oaps(Oap $oap, Request $request)
    {
        header('Access-Control-Allow-Origi: *');
        if ($file = $request->file('image')) {
            $name = time() . '_'. $file->getClientOriginalName();
            $file->move('images/oaps', $name);
            $request->image = $name;
        }
        $data = $oap->create([
            'name' => $request->name,
            'display_name' => $request->display_name,
            'title' => $request->title,
            'slug' => $request->slug,
            'bio' => $request->bio,
            'image' => $request->image
        ]);
        return response()->json($data);
    }

}
