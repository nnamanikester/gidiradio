<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

	<title>Nigerian Best Online Radio - @yield('title')</title>

    <link rel='stylesheet' href='{{ asset('css/style.min.css') }}' media='all' />
	<link rel='stylesheet' href='{{ asset('css/theme.min.css') }}' media='all' />
    <link rel='stylesheet' href='{{ asset('css/loop.style.min.css') }}' media='all' />
	<link rel='stylesheet' href='{{ asset('css/play.block.min.css') }}' media='all' />
	<link rel='stylesheet' href='{{ asset('css/theme.style.css') }}' media='all' />
	<link rel='stylesheet' href='{{ asset('css/theme.main.css') }}' media='all' />
	<link rel='stylesheet' href='{{ asset('css/woo.css') }}' media='all' />
	<style>
				.text-primary,
				.nav .active,
				.nav .current_page_item,
				a:hover{
					color: #03c1ae;
				}
				.gd-primary,
				.player [data-plyr="play"]{
					color: #fff !important;
					background: #03c1ae linear-gradient(135deg, #03c1ae 10%, rgb(3, 193, 94.833333333333) 90%) !important;
				}
				[data-plyr="like"] .icon--pressed,
				.btn-like.active svg{
					stroke: #03c1ae;
					fill: #03c1ae;
				}
				input:not([type="radio"]):not([type="checkbox"]):not([type="range"]):focus,
				select:focus,
				textarea:focus{
					border-width: 2px;
					border-color: #03c1ae;
				}
				.button.add_to_cart_button,
				.button-primary{
					background-color: #03c1ae !important;
				}
				.is--repeat svg,
				.is--shuffle svg{
					fill: #03c1ae;
				}
				.wp-block-loop:not(.block-loop-row) .btn-like.active svg{
					stroke: currentColor;
					fill: currentColor;
				}
				.block-loop-hover .block-loop-item:hover,
				.block-loop-hover .block-loop-item:focus,
				.block-loop-hover .block-loop-item.active{
					background-color: #03c1ae;
				}
				.block-loop-hover .block-loop-item:hover .post-thumbnail:after,
				.block-loop-hover .block-loop-item:focus .post-thumbnail:after,
				.block-loop-hover .block-loop-item.active .post-thumbnail:after{
					background-color: #03c1ae;
					background: linear-gradient(180deg, rgba(3, 193, 174, 0.5), #03c1ae);
				}

			.page-animating .featured-image .entry-header-container .post-thumbnail{
				opacity: 0;
				transition-delay: 0s;
				transform: translate3d(0, 0, 0);
			}
			.page-animating .entry-header-container .entry-title,
			.page-animating .entry-header-container .entry-artist{
				clip-path: polygon(0 0,0 0,0 120%,0 120%);
				transition-delay: 0.0s;
			}
			.page-animating .backdrop{
				transform-origin: left center;
				transition-delay: 0s;
				transform: translate3d(0, 0, 0) scaleX(1);
			}
	</style>

    <script src='{{ asset('js/jquery.js') }}'></script>
    <script src='{{ asset('js/jquery-migrate.min.js') }}'></script>

</head>

<body class=" page-template-default theme-bepop woocommerce-no-js layout-site dark featured-image">


	<div class="site">

        @yield('header')

        <div class="backdrop"></div>
        <!-- PAGE CONTENT STARTS HERE -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">

                    @yield('content')

                </main><!-- #main -->
            </div><!-- #primary -->

		</div>
		<!-- PAGE CONTENT ENDS HERE -->

		<footer id="footer" class="site-footer">
			<div class="container">
				<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
					<p style="color:#888888;font-size:12px;text-align:center" class="has-text-color">
						&copy; {{ date('Y') }} <a href="/">GidiRadio Inc</a> - All Rights Reserved.
					</p>
                    <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>

			</div>
		</footer>

    </div>


    <script src='{{ asset('js/jquery.blockUI.min.js') }}'></script>
    <script src='{{ asset('js/pjax.min.js') }}'></script>
    {{-- <script src='{{ asset('js/loop.min.js') }}'></script> --}}
    <script src='{{ asset('js/play.min.js') }}'></script>
    <script src='{{ asset('js/site.min.js') }}'></script>

@yield('scripts')



</body>

<!-- -->
</html>
