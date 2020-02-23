<?php

namespace App\Http\Controllers;

use App\Role;
use App\Advert;
use App\Programme;
use App\Episode;
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

}
