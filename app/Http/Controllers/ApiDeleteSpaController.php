<?php

namespace App\Http\Controllers;

use App\Role;
use App\Advert;
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
        $data->delete();
        return response()->json($data);
    }

}
