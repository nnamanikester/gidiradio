<?php

namespace App\Http\Controllers;

use App\Role;
use App\Advert;
use App\Programme;
use App\Episode;
use App\Asitdrop;
use App\Oap;
use App\Blog;
use App\HeaderImage;
use Illuminate\Http\Request;

class ApiDeleteSpaController extends Controller
{

    public function role(Role $role, $id)
    {
        header('Access-Control-Allow-Origin: *');
        $data = $role->findOrFail($id)->delete();
        return response()->json($data);
    }

    public function advert($id, Advert $advert)
    {
        header('Access-Control-Allow-Origin: *');
        $data = $advert->findOrFail($id);
        return response()->json($data->delete());
    }

    public function programme($id, Programme $programme, Episode $episode)
    {
        header('Access-Control-Allow-Origin: *');
        $data = $programme->findOrFail($id);
        if (file_exists('images/programmes/' . $data->image)) {
            unlink('images/programmes/' . $data->image);
        }
        $episode->where('programme_id', $programme->id)->delete();
        return response()->json($data->delete());
    }

    public function episode(Episode $episode, $id)
    {
        header('Access-Control-Allow-Origin: *');
        $data = $episode->findOrFail($id);
        if (file_exists('images/programmes/episodes/' . $data->image)) {
            unlink('images/programmes/episodes/' . $data->image);
        }
        if (file_exists('audio/episodes/' . $data->audio)) {
            unlink('audio/episodes/' . $data->audio);
        }
        return response()->json($data->delete());
    }

    public function asitdrop(Asitdrop $music, $id)
    {
        header('Access-Control-Allow-Origin: *');
        $data = $music->findOrFail($id);
        if (file_exists('images/audio/' . $data->image)) {
            unlink('images/audio/' . $data->image);
        }
        if (file_exists('audio/asitdrops/' . $data->audio)) {
            unlink('audio/asitdrops/' . $data->audio);
        }
        return response()->json($data->delete());
    }

    public function oap(Oap $oap, $id)
    {
        header('Access-Control-Allow-Origin: *');
        $data = $oap->findOrFail($id);
        if (file_exists('images/oaps/' . $data->image)) {
            unlink('images/oaps/' . $data->image);
        }
        return response()->json($data->delete());
    }

    public function blog(Blog $blog, $id)
    {
        header('Access-Control-Allow-Origin: *');
        $data = $blog->findOrFail($id);
        if (file_exists('images/blogs/' . $data->image)) {
            unlink('images/blogs/' . $data->image);
        }
        return response()->json($data->delete());
    }

    public function header_image(HeaderImage $header, $id)
    {
        header('Access-Control-Allow-Origin: *');
        $data = $header->findOrFail($id);
        if (file_exists('images/header/' . $data->image)) {
            unlink('images/header/' . $data->image);
        }
        return response()->json($data->delete());
    }

}
