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
use App\BlogComment;
use App\BlogView;
use App\AsitdropPlay;
use App\EpisodeComment;
use App\EpisodeView;
use App\EpisodePlay;
use App\ProgrammeComment;
use App\ProgrammeView;
use App\Page;
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

    public function pages(Page $page) 
    {
        header('Access-Control-Allow-Origin: *');
        return response()->json($page->get());
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

    public function single_page(Page $page, $slug)
    {
        header('Access-Control-Allow-Origin: *');
        return response()->json($page->where('slug', $slug)->get());
    }

    public function site_stats()
    {
        header('Access-Control-Allow-Origin: *');
        $asitdrop = new Asitdrop;
        $asitdropPlay = new AsitdropPlay;
        $blog = new Blog;
        $blogComment = new BlogComment;
        $blogView = new BlogView;
        $episode = new Episode;
        $episodeComment = new EpisodeComment;
        $episodePlay = new EpisodePlay;
        $episodeView = new EpisodeView;
        $programme = new Programme;
        $programmeComment = new ProgrammeComment;
        $programmeView = new ProgrammeView;
        $user = new User;

        $response = [
            'asitdrops' => count($asitdrop->all()),
            'asitdropPlays' => count($asitdropPlay->all()),
            'blogs' => count($blog->all()),
            'blogComments' => count($blogComment->all()),
            'blogViews' => count($blogView->all()),
            'episodes' => count($episode->all()),
            'episodeComments' => count($episodeComment->all()),
            'episodeViews' => count($episodeView->all()),
            'programmes' => count($programme->all()),
            'programmeViews' => count($programmeView->all()),
            'programmeComments' => count($programmeComment->all()),
            'users' => count($user->all())
        ];
        return response()->json($response);
    }

    public function comments(BlogComment $blog, EpisodeComment $episode, ProgrammeComment $programme)
    {
        header('Access-Control-Allow-Origin: *');
        $blogs = $blog->latest()->get();
        $episodes = $episode->latest()->get();
        $programmes = $programme->latest()->get();
        $comments = [];
        foreach($blogs as $b) {
            array_push($comments, $b);
        }
        foreach($episodes as $e) {
            array_push($comments, $e);
        }
        foreach($programmes as $p) {
            array_push($comments, $p);
        }
        return response()->json($comments);
    }

}
