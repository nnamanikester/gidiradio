<?php

namespace App\Http\Controllers;

use App\User;
use App\Oap;
use App\Blog;
use App\Role;
use App\Advert;
use App\Episode;
use App\Asitdrop;
use App\Programme;
use App\HeaderImage;
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

    public function profile_details($id, User $user)
    {
        header('Access-Control-Allow-Origin: *');
        return response()->json($user->findOrFail($id)->with('programmes', 'episodes', 'asitdrops', 'blogs', 'pages', 'adverts', 'headerImages', 'role')->get());
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

    public function roles(Role $role)
    {
        header('Access-Control-Allow-Origin: *');
        return response()->json($role->with('users')->get());
    }

    public function header_images(HeaderImage $hi)
    {
        header('Access-Control-Allow-Origin: *');
        return response()->json($hi->get());
    }

    public function adverts(Advert $ad)
    {
        header('Access-Control-Allow-Origin: *');
        return response()->json($ad->get());
    }

    public function single_programme($slug, Programme $programme)
    {
        header('Access-Control-Allow-Origin: *');
        return response()->json($programme->where('slug', $slug)->with('episodes', 'oap', 'comments', 'views', 'user')->get());
    }

    public function single_episode($slug, Episode $episode)
    {
        header('Access-Control-Allow-Origin: *');
        return response()->json($episode->where('slug', $slug)->with('programme', 'oap', 'user', 'views', 'plays', 'comments')->get());
    }

    public function single_blog($slug, Blog $blog)
    {
        header('Access-Control-Allow-Origin: *');
        return response()->json($blog->where('slug', $slug)->with('comments', 'user', 'views')->get());
    }

    public function single_oap($slug, Oap $oap)
    {
        header('Access-Control-Allow-Origin: *');
        return response()->json($oap->where('slug', $slug)->with('programmes', 'episodes', 'socials')->get());
    }

    public function site_stats()
    {
        $asitdrop = new Asitdrop;
        $asitdropPlay = new AsitdropPlay;
        $blog = new Blog;
        $blogComment = new BlogComment;
        $blogView = new BlogView;
        $episode = new Episode;
        $episodeComment = new EpisdoeComment;
        $episodePlay = new EpisodePlay;
        $episodeView = new EpisdoeView;
        $programme = new Programme;
        $programmeComment = new ProgrammeComment;
        $programmeView = new ProgrammeView;
        $user = new User;

    }

}
