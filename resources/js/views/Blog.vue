<template>
    <div v-if="pageLoading" class="justify-content-center loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <article class="station type-station status-publish has-post-thumbnail hentry genre-country entry" v-else-if="blog.title">

        <div class="entry-header-container header-station">

            <figure class="post-thumbnail">
                <img width="1000" height="1164" :src="blogSrc + blog.image" class="attachment-full size-full wp-post-image" alt="" style="object-position: 50% 100%" sizes="(max-width: 1000px) 100vw, 1000px">
            </figure>

            <header class="entry-header">
                <h1 class="entry-title">{{ blog.title }}</h1>
                <div class="entry-meta">
                    <span class="play-count">{{ blog.comments.length }} Comments</span>.
                    <span class="btn-like"> <span class="count"> {{ blog.views.length }} views</span></span>.
                    <span class="byline"><span class="svg-icon"><img alt="" :src="userSrc + blog.user.image" class="avatar avatar-48 photo" height="48" width="48"></span>
                    <span class="author vcard"><a class="url fn n" href="">{{ blog.user.username }}</a></span></span>
                </div>
            </header>


        </div>

        <div class="entry-content">

            <div class="flex-row">
                <div class="flex">
                    <div class="wp-block-loop wp-block-loop-station ">
                        <!-- <h3>Blog Details</h3> -->

                        <p>
                            {{ blog.body }}
                        </p>

                    </div>

                    <div class="comments-area">
                        <ol class="comment-list" v-if="blog.comments">
					        <li class="comment byuser even thread-even depth-1 parent" v-for="comment in blog.comments" :key="comment.id">
                                <article id="div-comment-87" class="comment-body">
                                    <footer class="comment-meta">
                                        <div class="comment-author vcard">
                                            <img alt="" src="http://0.gravatar.com/avatar/ff7f090e3d537b2106e5e0b4277459c3?s=96&amp;d=mm&amp;r=g" class="avatar avatar-96 photo" height="96" width="96"><b class="fn">{{ comment.name }}</b> <span class="says">says:</span>
                                        </div>
                                        <div class="comment-metadata">
                                            <time>{{ moment(comment.created_at).startOf('hour').fromNow() }}</time>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        <p>{{ comment.body }}</p>
                                    </div>
                                </article>
                            </li>
		                </ol>
                        <div id="respond" class="comment-respond">

                            <h2 class="comment-reply-title">Leave a Reply <small><a rel="nofollow" href="#">Cancel reply</a></small></h2>
                            <div class="text-danger" v-if="feedback">{{ feedback }}</div>
                            <form action="" @submit.prevent method="post" class="comment-form">

                                <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span>Required fields are marked <span class="required">*</span></p>
                                <p class="comment-form-comment">
                                    <label for="comment">Comment</label>
                                    <textarea v-model="comment.body" id="comment" cols="45" rows="8" ></textarea>
                                </p>

                                <label for="author">Name <span class="required">*</span></label>
                                <input v-model="comment.name" type="text" size="30">

                                <label for="email">Email <span class="required">*</span></label>
                                <input v-model="comment.email" type="email" size="30" aria-describedby="email-notes">

                                <label for="url">Website</label>
                                <input v-model="comment.website" type="url" value="" size="30" maxlength="200">

                                <!-- <p class="comment-form-cookies-consent">
                                    <input name="cookies-consent" type="checkbox" value="yes">
                                    <label for="cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                </p> -->
                                <p class="form-submit">
                                    <button class="submit" @click="postComment">Post Comment</button>
                                </p>
                            </form>
                        </div><!-- #respond -->

                    </div><!-- .comments-area -->

                </div>
                <div class="sep"></div>

                <div class="sidebar">
                    <div class="sticky-top">
                        <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>

                            <Advert />

                            <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
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
import Advert from '../components/Advert'
import axios from 'axios'
import moment from 'moment'
import Error404 from './404'
import FormData from 'form-data'

export default {
    name: 'Blog',
    components: {
        Advert,
        Error404
    },
    data () {
        return {
            blog: [],
            blogSrc: '/images/blogs/',
            userSrc: '/images/users/',
            moment,
            pageLoading: true,
            networkError: false,
            comment: {
                body: null,
                name: null,
                website: null,
                email: null
            },
            feedback: null
        }
    },
    methods: {
        getBlog () {
            axios.get(`/api/blog/${this.$route.params.slug}`)
                .then(res => {
                    res.data.forEach(item => {
                        this.blog = item
                    })
                    if (this.blog.title) {
                        this.pageLoading = false
                    } else {
                        this.pageLoading = false
                    }
                })
                .catch(err => {
                    const error = err
                    this.pageLoading = false
                    this.networkError = true
                })
        },
        postComment () {
            if (!this.comment.body) return this.feedback = 'Comment is required!'
            if (!this.comment.name) return this.feedback = 'Name is required!'
            if (!this.comment.email) return this.feedback = 'Email is required!'
            if (this.comment.body && this.comment.name && this.comment.email) {
                const data = new FormData()
                data.append('name', this.comment.name)
                data.append('email', this.comment.email)
                data.append('body', this.comment.body)
                data.append('website', this.comment.website)
                data.append('blog_id', this.blog.id)
                axios.post(`/api/blog/comment`, data)
                    .then(res => {
                        this.blog.comments.unshift(res.data)
                        this.comment.name = null
                        this.comment.email = null
                        this.comment.body = null
                        this.comment.website = null
                    })
                    .catch(err => {
                        const error = err
                        console.log(err)
                    })
            }
        }
    },
    mounted () {
        this.getBlog()
    },
    metaInfo () {
        return {
            title: this.blog.title ? this.blog.title : ''
        }
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
