<template>
    <div v-if="pageLoading" class="justify-content-center loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <article class="entry user" v-else-if="oap.name">

        <div class="entry-header-container">
            <header class="entry-header">
                <h1 class="entry-title">{{ oap.name }}</h1>
                <div class="entry-description">
                    {{ oap.bio }}
                </div>
                <div class="entry-meta">
                    <button disabled class="btn-follow button-rounded">
                        <span class="follow">{{ oap.display_name }}</span>
                    </button>
                    <div class="user-links">
                        <!-- <span><a href="#" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="svg-icon feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg></a></span>
                        <span ><a href="http://facebook.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="svg-icon feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a></span>
                        <span ><a href="http://twitter.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="svg-icon feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a></span>
                        <span ><a href="http://youtube.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="svg-icon feather feather-youtube"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg></a></span> -->
                    </div>
                </div>
	        </header>

            <figure class="post-thumbnail">
                <img alt="" :src="oapSrc + oap.image" style="object-position: 50% 68.51851851851852%">
            </figure>
        </div>


        <div class="entry-content sub-content">

	        <div class="wp-block-loop wp-block-loop-station-product ">
                <div class="jscroll-inner">

                    <h3>Programmes</h3>

                    <div class="row">
                        <div class=" col-6 col-sm-4 col-md-3 col-lg-2-4 col-xl-2" v-if="oap.programmes">
                            <article v-for="pro in oap.programmes" :key="pro.id" class="block-loop-item product type-product status-publish has-post-thumbnail product_cat-cd entry first instock sale shipping-taxable purchasable product-type-simple">
	                            <figure class="post-thumbnail">
		                            <a class="post-thumbnail-inner" href="#" aria-hidden="true" tabindex="-1">
			                            <img width="1200" height="1200" :src="programmeSrc + pro.image">
                                    </a>
                                </figure>

                                <header class="entry-header">
                                    <h3 class="entry-title">
                                        <a :to="{ name: 'Programme', params: { slug: pro.slug } }" rel="bookmark">{{ pro.title }}</a>
                                    </h3>
                            	</header>
                            </article>
                        </div>
                    </div>
                </div>
            </div>

        </div>
	</article>
    <div v-else-if="networkError" class="justify-content-center loader">
        <div class="error">
        <span class="error">X</span> Unable to load page <span class="error">X</span><br/>
        <span class="text-primary">Check that you have an Internet connection</span>
        </div>
    </div>
    <Error404 v-else />
</template>

<script>
import axios from 'axios'
import Error404 from './404'

export default {
    name: 'OAPProfile',
    data: () => ({
        oap: [],
        oapSrc: '/images/oaps/',
        programmeSrc: '/images/programmes/',
        pageLoading: true,
        networkError: false
    }),
    components: {
        Error404
    },
    metaInfo () {
        return {
            title: this.oap.name ? this.oap.name : ''
        }
    },
    methods: {
        getOap () {
            axios.get(`/api/oap/${this.$route.params.slug}`)
                .then(res => {
                    res.data.forEach(item => {
                        this.oap = item
                    })
                    
                    if (this.oap.title) {
                        this.pageLoading = false
                    } else {
                        this.pageLoading = false
                    }
                })
                .catch(er => {
                    const error = er
                    this.pageLoading = false
                    this.networkError = true
                })
        }
    },
    mounted () {
        this.getOap()
    }
}
</script>

<style>
  .loader {
    width: 100%;
    height: 100vh;
    text-align: center;
    margin-top: 30vh;
  }
</style>