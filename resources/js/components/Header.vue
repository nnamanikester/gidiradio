<template>
    <div class="header-component">

		<input type="checkbox" id="menu-state">
		<input type="checkbox" id="search-state">

		<!-- HEADER AND NAVIGATION STARTS HERE -->
		<header class="site-header">
			<div class="header-container">
				<div class="site-navbar">
					<label for="menu-state" id="icon-nav"><i class="icon-nav"><i></i></i></label>
					<div class="site-brand">
						<div class="site-logo">
							<a data-pjax-state="" href="/">D~R</a>
						</div>
						<p class="site-title"><a href="/" data-pjax-state="" rel="home">GidiRadio</a></p>
					</div>

					<nav id="site-navigation" class="main-navigation">
						<div class="menu-main-container">
							<ul id="menu-main" class="main-menu nav">
								<li class="icon-disc  menu-item-home current-page_item page-item-9 current_page_item ">
									<a data-pjax-state="" href="/" aria-current="page"><span>Home</span></a>
								</li>
								<li class="icon-book">
									<router-link :to="{ name: 'Blog', params: { slug: 'blog-1' }  }">News</router-link>
								</li>
								<li class="icon-radio">
									<router-link :to="{ name: 'About' }">About Us</router-link>
								</li>
								<li class="icon-trending-up">
									<router-link :to="{ name: 'Contact' }">Contact Us</router-link>
								</li>
								<li class="icon-music  menu-item-has-children ">
									<a href="#"><span>Pages</span></a>
									<ul class="sub-menu">
										<li><router-link :to="{ name: 'DMCA' }">DMCA</router-link></li>
										<li><router-link :to="{ name: 'Terms' }">Terms Of Use</router-link></li>
										<li><router-link :to="{ name: 'Policy' }">Privacy Policy</router-link></li>
									</ul>
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

    </div>
</template>

<script>
import axios from 'axios'

export default {
    name: 'Header'
}
</script>

<style>
    .header-component, .site-header, .site-navbar, .header-container{
        background: #000000!important;
    }
</style>
