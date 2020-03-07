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
							<a data-pjax-state="" href="/">
								<img :src="logoSrc + info.favico ? info.favico : ''" width="20" alt="">
							</a>
						</div>
						<p class="site-title"><a href="/" data-pjax-state="" rel="home">{{ info.site_name ? info.site_name : '' }}</a></p>
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
								<li class="icon-music  menu-item-has-children " v-if="pages.length != 0">
									<a href="#"><span>Pages</span></a>
									<ul class="sub-menu">
										<li v-for="page in pages" :key="page.id"><a :href="'/8page/' + page.slug">{{ page.title }}</a></li>
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
import db from '../database/db'

export default {
	name: 'Header',
	data () {
		return {
			pages:  [],
			info: db.siteInfo,
			logoSrc: '/images/site-info/'
		}
	},
	methods: {
		getPages () {
			axios.get('/api/pages')
				.then(res => {
					res.data.forEach(item => {
						this.pages.push(item)
					})
				})
				.catch(err => {
					const error = err
				})
		}
	},
	mounted () {
		this.getPages()
	}

}
</script>

<style>
    .header-component, .site-header, .site-navbar, .header-container{
        background: #000000!important;
    }
</style>
