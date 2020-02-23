<?php

namespace App\Http\Controllers;

use App\Role;
use App\Programme;
use App\Advert;
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
        return response()->json($request->all());
    }

}
