@extends('layouts.app')

@section('title') GidiRadio @endsection


@section('header')

<input type="checkbox" id="menu-state">
<input type="checkbox" id="search-state">

<!-- HEADER AND NAVIGATION STARTS HERE -->
<header id="header" class="site-header">
    <div class="header-container">
        <div class="site-navbar">
            <label for="menu-state" id="icon-nav"><i class="icon-nav"><i></i></i></label>
            <div class="site-brand">
                <div class="site-logo">
                    <a href="{{ url('/') }}">D~R</a>
                </div>
                <p class="site-title" data-pjax-state=""><a href="{{ url('/') }}" rel="home">GidiRadio</a></p>
            </div>

            <nav id="site-navigation" class="main-navigation">
                <div class="menu-main-container">
                    <ul id="menu-main" class="main-menu nav">
                        <li class="icon-disc  menu-item-home current-page_item page-item-9 current_page_item ">
                            <a href="index.html" aria-current="page"><span>Discover</span></a>
                        </li>
                        <li class="icon-music  menu-item-has-children ">
                            <a href="browse/index.html"><span>Browse</span></a>
                            <ul class="sub-menu">
                                <li><a href="#">New Release</a></li>
                                <li><a href="browse/audio/index.html">Music</a></li>
                                <li><a href="browse/podcasts/index.html">Podcasts</a></li>
                                <li><a href="browse/radio/index.html">Radio</a></li>
                            </ul>
                        </li>
                        <li class="icon-radio">
                            <a href="login/index.html"><span>Stream</span></a>
                        </li>
                        <li class="icon-trending-up">
                            <a href="charts/index.html"><span>Charts</span></a>
                        </li>
                        <li class="icon-book">
                            <a href="news/index.html"><span>News</span></a>
                        </li>
                    </ul>
                </div>
            </nav>

            <form id="header-search-form" method="get" action="">
                <input type="search" placeholder="Search …" value="" name="s" data-toggle="dropdown">
                <label for="search-state" id="icon-search"><i class="icon-search"><i></i></i></label>
                <div class="dropdown-menu"></div>
            </form>
        </div>
    </div>
</header>
<!-- HEADER AND NAVIGATION ENDS HERE -->

@endsection

@section('content')
<div id="welcome">
<article class="status-publish has-post-thumbnail hentry entry hide-title">

<div class="entry-content">
    <div class="wp-block-loop wp-block-loop-page slick-dots-right slick-alignfull alignfull" >
        <div class="row" data-plugin="slick" data-option="{ slidesToShow: 1, slidesToScroll: 1, infinite: true, dots: true, arrows:false, fade: true, autoplay: true}">

            @foreach ($header_images as $item)

            <div class=" col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <article class="status-publish has-post-thumbnail hentry entry">
                    <div class="entry-header-container">
                        <header class="entry-header">
                            <h2 class="entry-title h1">{{ $item->title }}</h2>		</header>

                            <figure class="post-thumbnail">
                                <a class="post-thumbnail-inner" href="{{ $item->button_link }}" aria-hidden="true" tabindex="-1">
                                    <img width="1210" height="1300" src="{{ asset('images/header/' . $item->image) }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" style="object-position: 50%" data-pos-y="" sizes="(max-width: 1210px) 100vw, 1210px" />
                                </a>
                            </figure>
                    </div>
                    <div class="entry-content">
                        <p>{{ $item->content }} </p>

                        <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>

                        <div class="wp-block-button">
                        <a class="wp-block-button__link has-background has-vivid-green-cyan-background-color" href="{{ $item->button_link }}">{{ $item->button_text }}</a>
                        </div>
                    </div>
                    <footer class="entry-footer"></footer>
                </article>
            </div>

            @endforeach

        </div>
    </div>

    <!-- FEATURED STARTS HERE -->
    <h3>Our Programmes</h3>

    <div class="wp-block-loop wp-block-loop-station  align" >
        <div class="row" data-plugin="slick" data-option="{ slidesToShow: 6, slidesToScroll: 1, infinite: false, responsive: [ { breakpoint: 920, settings: { slidesToShow: 4 } }, { breakpoint: 768, settings: { slidesToShow: 3 } }, { breakpoint: 576, settings: { slidesToShow: 2 } } ] }">
            <!-- Programmes -->
            @foreach ($programmes as $item)

            <div class=" col-6 col-sm-4 col-md-3 col-lg-2-4 col-xl-2">
                <article class="block-loop-item post-476 station type-station status-publish has-post-thumbnail hentry genre-pop station_tag-youtube entry">
                    <figure class="post-thumbnail">
                        <a class="post-thumbnail-inner" href="{{ url('/programme/'.$item->slug) }}" aria-hidden="true" tabindex="-1">
                            <img width="1000" height="1250" src="{{ asset('images/programmes/'.$item->image) }}" class="attachment-post-thumbnail size-post-thumbnail" alt="" sizes="(max-width: 1000px) 100vw, 1000px" />
                        </a>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">
                            <a href="{{ url('/programme/'.$item->slug) }}" rel="bookmark">{{ $item->title }}</a>
                        </h3>
                    </header>
                </article>
            </div>

            @endforeach
            <!-- Programmes -->

        </div>
    </div>
    <!-- FEATURED ENDS HERE -->


    <h3><a href="#">As It Drops</a></h3>

    <!-- AS IT DROPS -->
    <div class="wp-block-loop wp-block-loop-station block-loop-hover align" >
        <div class="row" data-plugin="slick" data-option="{ slidesToShow: 6, slidesToScroll: 1, infinite: false, responsive: [ { breakpoint: 920, settings: { slidesToShow: 4 } }, { breakpoint: 768, settings: { slidesToShow: 3 } }, { breakpoint: 576, settings: { slidesToShow: 2 } } ] }" >

            <!-- As It Drops -->
            @foreach ($asitdrops as $item)
            <div class=" col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                <article data-id="post-223" data-play-id="223" class="block-loop-item post-223 station type-station status-publish has-post-thumbnail hentry genre-radio entry" onClick="playMusic({{ $item->audio }})">
                    <figure class="post-thumbnail">
                        <a class="post-thumbnail-inner" href="station/the-blues-cove/index.html" aria-hidden="true" tabindex="-1">
                        <img width="1568" height="1045" src="{{ asset('images/audio/'.$item->image) }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" sizes="(max-width: 1568px) 100vw, 1568px" />
                        </a>
                        <div class="entry-action">
                            <span class="btn-like "></span>
                            <button class="btn-play">play</button>
                            <span class="btn-more"></span>
                        </div>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">
                            <a href="#" rel="bookmark">{{ $item->title }}</a>
                        </h3>
                        <div class="entry-meta">
                            <span class="byline"><span class="author vcard"><a class="url fn n" href="#">{{ $item->artist }}</a></span></span>
                        </div>
                    </header>

                </article>
            </div>
            @endforeach
            {{-- AS IT DROPS --}}

        </div>
    </div>
    {{-- AS IT DROPS --}}



    <h3><a href="#">Meet Our OAPs</a></h3>

    <!-- OAPs STARTS HERE -->
    <div class="entry-content sub-content">
        <div class="wp-block-loop wp-block-loop-user">
            <div class="row" data-plugin="slick" data-option="{ slidesToShow: 5, slidesToScroll: 1, infinite: true, responsive: [ { breakpoint: 920, settings: { slidesToShow: 4 } }, { breakpoint: 768, settings: { slidesToShow: 3 } }, { breakpoint: 576, settings: { slidesToShow: 2 } } ] }">

                <!-- OAP ITEM STARTS HERE -->
                @foreach ($oaps as $item)
                <div class=" col-6 col-sm-4 col-md-3 col-lg-2-4 col-xl-2">
                    <article id="user-1" class="block-loop-item">
                        <figure class="post-thumbnail">
                            <a class="post-thumbnail-inner" href="admin/index.html">
                                <img alt="Oap"
                            src="{{ asset('images/oaps/' . $item->image) }}" />
                            </a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title"><a href="{{ url('/profile/'.$item->slug) }}"
                                    rel="bookmark">{{ $item->name }}</a></h3>
                            <button class="btn-follow">
                                <span class="follow">{{ $item->title }}</span>
                            </button>
                        </header>
                    </article>
                </div>
                @endforeach
                <!-- OAP ITEM ENDS HERE -->

            </div>
        </div>
    </div>
    <!-- OAP ENDS HERE -->

    <!-- AS IT DROPS STARTS HERE -->
    <h3>Latest Trends</h3>

    <div class="wp-block-loop wp-block-loop-station  align" >
        <div class="row" data-plugin="slick" data-option="{ slidesToShow: 6, slidesToScroll: 1, infinite: false, responsive: [ { breakpoint: 920, settings: { slidesToShow: 4 } }, { breakpoint: 768, settings: { slidesToShow: 3 } }, { breakpoint: 576, settings: { slidesToShow: 2 } } ] }">

            <!-- BLOGS -->
            @foreach ($blogs as $item)
            <div class=" col-6 col-sm-4 col-md-3 col-lg-2-4 col-xl-2">
                <article class="block-loop-item post-476 station type-station status-publish has-post-thumbnail hentry genre-pop station_tag-youtube entry">
                    <figure class="post-thumbnail">
                        <a class="post-thumbnail-inner" href="{{ '/blog/' . $item->slug }}" aria-hidden="true" tabindex="-1">
                            <img width="1000" height="1250" src="{{ asset('images/blogs/' . $item->image) }}" class="attachment-post-thumbnail size-post-thumbnail" alt="" sizes="(max-width: 1000px) 100vw, 1000px" />
                        </a>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">
                        <a href="{{ '/blog/' . $item->slug }}" rel="bookmark">{{ $item->title }}</a>
                        </h3>
                    </header>
                </article>
            </div>
            @endforeach
            <!-- BLOGS -->

        </div>
    </div>
    <!-- AS IT DROPS ENDS HERE -->


<div class="wp-block-columns has-2-columns">
<div class="wp-block-column">

    <h3>Most Played</h3>

    <div class="wp-block-loop wp-block-loop-station block-loop-row block-loop-sm block-loop-index align" >
        <div class="row" >

            <div class=" col-6 col-sm-4 col-md-3 col-lg-2-4 col-xl-2">
                <article class="block-loop-item station type-station status-publish has-post-thumbnail hentry genre-pop station_tag-youtube entry">
                    <figure class="post-thumbnail">
                        <a class="post-thumbnail-inner" href="station/girls-like-you-ft-cardi-b-youtube/index.html" aria-hidden="true" tabindex="-1">
                            <img width="1000" height="1250" src="wp-content/uploads/2019/06/pexels-photo-1738541.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" sizes="(max-width: 1000px) 100vw, 1000px" />
                        </a>
                        <div class="entry-action">
                            <button class="btn-play">play</button>
                        </div>
                    </figure>

                    <header class="entry-header">

                        <h3 class="entry-title">
                            <a href="station/girls-like-you-ft-cardi-b-youtube/index.html" rel="bookmark">Girls like you MTV</a>
                        </h3>
                        <div class="entry-meta">
                            <span class="byline"><span class="author vcard"><a class="url fn n" href="user/adam/index.html">Adam Stefancik</a></span></span>
                        </div>
                    </header>

                    <!-- <footer class="entry-footer">
                        <span class="play-count">105</span>		<button class="btn-more " data-id="476" data-url="http://flatfull.com/wp/bepop/station/girls-like-you-ft-cardi-b-youtube/" data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="svg-icon"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></button><div class="dropdown-menu dropdown-menu-right"></div>			</footer> -->
                </article>
            </div>


            <div class=" col-6 col-sm-4 col-md-3 col-lg-2-4 col-xl-2">
                <article class="block-loop-item station type-station status-publish has-post-thumbnail hentry genre-pop station_tag-youtube entry">
                    <figure class="post-thumbnail">
                        <a class="post-thumbnail-inner" href="station/girls-like-you-ft-cardi-b-youtube/index.html" aria-hidden="true" tabindex="-1">
                            <img width="1000" height="1250" src="wp-content/uploads/2019/06/pexels-photo-1738541.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" sizes="(max-width: 1000px) 100vw, 1000px" />
                        </a>
                        <div class="entry-action">
                            <button class="btn-play">play</button>
                        </div>
                    </figure>

                    <header class="entry-header">

                        <h3 class="entry-title">
                            <a href="station/girls-like-you-ft-cardi-b-youtube/index.html" rel="bookmark">Girls like you MTV</a>
                        </h3>
                        <div class="entry-meta">
                            <span class="byline"><span class="author vcard"><a class="url fn n" href="user/adam/index.html">Adam Stefancik</a></span></span>
                        </div>
                    </header>

                    <!-- <footer class="entry-footer">
                        <span class="play-count">105</span>		<button class="btn-more " data-id="476" data-url="http://flatfull.com/wp/bepop/station/girls-like-you-ft-cardi-b-youtube/" data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="svg-icon"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></button><div class="dropdown-menu dropdown-menu-right"></div>			</footer> -->
                </article>
            </div>
        </div>
    </div>
    <p></p>
</div>



<div class="wp-block-column">
    <h3>Advertisment</h3>

    <div class="wp-block-column">

        @foreach ($ads as $item)
        <div class="wp-block-columns">
            <div class="wp-block-cover has-pale-cyan-blue-background-color has-background-dim h-auto rounded">
                <div class="wp-block-cover__inner-container">
                    {{-- <p style="text-align:center" class="has-medium-font-size">MTN EVERYWHERE YOU GO</p> --}}
                    {!! $item->content !!}
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <div class="wp-block-loop wp-block-loop-post post-thumbnail-16x9 align" ></div>
</div>

</div>



<div class="wp-block-cover alignfull has-background-dim-60 has-background-dim has-parallax" style="background-image:url({{ asset('images/site-info/' . $settings->signboard_image) }})">
<div class="wp-block-cover__inner-container">
    <p style="text-align:center" class="has-large-font-size w-50">
        <strong>{{ $settings->signboard_title }}</strong>
    </p>
    <div class="wp-block-button aligncenter">
        <a class="wp-block-button__link has-text-color has-background has-very-light-gray-background-color" href="{{ $settings->signboard_button_link }}" style="color:#0a9763">{{ $settings->signboard_button_text }}</a>
    </div>
</div>
</div>
</div>
</article>

</div>

@endsection

@section('scripts')
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
    <script>
        const playMusic = music => {
            console.log(music);
        }
    </script>
@endsection
