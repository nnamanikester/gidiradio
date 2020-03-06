<template>
<div v-if="pageLoading" class="justify-content-center loader">
  <div class="spinner-border text-primary" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>
    <article v-else-if="programme.title" class="station type-station status-publish has-post-thumbnail hentry genre-country entry">

        <div class="entry-header-container header-station">

            <figure class="post-thumbnail">
                <img width="1000" height="1164" :src="src + programme.image" class="attachment-full size-full wp-post-image" alt="" style="object-position: 50% 100%" sizes="(max-width: 1000px) 100vw, 1000px">
            </figure>

            <header class="entry-header">
                <h1 class="entry-title">{{ programme.title }}</h1>
                <div class="entry-meta">
                    <span class="play-count">{{ programme.comments.length }} Comments</span>.
                    <span class="btn-like"> <span class="count"> {{ programme.views.length }} views</span></span>.
                    <span class="byline"><span class="svg-icon"><img alt="" :src="oapSrc + programme.oap.image" class="avatar avatar-48 photo" height="48" width="48"></span>
                    <span class="author vcard"><a class="url fn n" href="">{{ programme.oap.display_name }}</a></span></span>
                </div>
            </header>


        </div>

        <div class="entry-content">

            <div class="flex-row">
                <div class="flex">
                    <div class="wp-block-loop wp-block-loop-station ">

                        <h3>Programme Details</h3>

                        <p>
                            {{ programme.details }}
                        </p>


                        <h3>Previous Episodes</h3>
                        <div class="row" v-if="programme.episodes">
                            <div class=" col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3" v-for="episode in programme.episodes" :key="episode.id">
                                <article class="block-loop-item station type-station status-publish has-post-thumbnail hentry genre-pop station_tag-youtube entry">
                                    <figure class="post-thumbnail">
                                        <a class="post-thumbnail-inner" href="#" aria-hidden="true" tabindex="-1">
                                            <img width="1000" height="1250" :src="episodeSrc + episode.image" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" sizes="(max-width: 1000px) 100vw, 1000px">
                                        </a>
                                        <div class="entry-action">
                                            <span class="btn-like"></span>
                                            <button class="btn-play">play</button>
                                            <span class="btn-more"></span>
                                        </div>
                                    </figure>

                                    <header class="entry-header">
                                        <h3 class="entry-title">
                                            <router-link :to="{ name: 'Episode', params: { programmeSlug: programme.slug, episodeSlug: episode.slug } }">  {{ episode.title }}</router-link>
                                        </h3>
                                    </header>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="comments-area">
                        <ol class="comment-list" v-if="programme.comments">
					        <li class="comment byuser even thread-even depth-1 parent" v-for="comment in programme.comments" :key="comment.id">
                                <article class="comment-body">
                                    <footer class="comment-meta">
                                        <div class="comment-author vcard">
                                            <img alt="" src="http://0.gravatar.com/avatar/ff7f090e3d537b2106e5e0b4277459c3?s=96&amp;d=mm&amp;r=g" class="avatar avatar-96 photo" height="96" width="96"><b class="fn">kester</b> <span class="says">says:</span>
                                        </div>
                                        <div class="comment-metadata">
                                            <time>{{ moment(comment.created_at).startOf('hour').fromNow() }}</time>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        <p>{{ comment.body }}</p>
                                    </div>

                                    <!-- <div class="reply"><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></div> -->
                                </article>

                            </li>
		                </ol>
                        <div id="respond" class="comment-respond">

                            <h2 class="comment-reply-title">Leave a Reply <small><a rel="nofollow" href="#">Cancel reply</a></small></h2>

                            <form action="" method="post" class="comment-form">

                                <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span>Required fields are marked <span class="required">*</span></p>
                                <p class="comment-form-comment">
                                    <label for="comment">Comment</label>
                                    <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
                                </p>

                                <label for="author">Name <span class="required">*</span></label>
                                <input name="author" type="text" size="30" maxlength="245" required="required">

                                <label for="email">Email <span class="required">*</span></label>
                                <input name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required">

                                <label for="url">Website</label>
                                <input name="url" type="url" value="" size="30" maxlength="200">

                                <p class="comment-form-cookies-consent">
                                    <input name="cookies-consent" type="checkbox" value="yes">
                                    <label for="cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                </p>
                                <p class="form-submit">
                                    <input name="submit" type="submit" class="submit" value="Post Comment">
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
    <Error404 v-else />
</template>

<script>
import Advert from '../components/Advert'
import axios from 'axios'
import moment from 'moment'
import Error404 from './404'

export default {
    name: 'Programme',
    components: {
        Advert,
        Error404
    },
    data () {
        return {
            programme: [],
            moment,
            src: '/images/programmes/',
            oapSrc: '/images/oaps/',
            episodeSrc: '/images/programmes/episodes/',
            pageLoading: true
        }
    },
    methods: {
        getProgramme () {
            axios.get(`/api/programme/${this.$route.params.slug}`)
                .then(res => {
                    res.data.forEach(item => {
                        this.programme = item
                    })
                    this.pageLoading = false
                })
                .catch(err => {
                    const error = err
                    this.pageLoading = false
                })
        }
    },
    metaInfo () {
        return {
            title: this.programme.title ? this.programme.title : ''
        }
    },
    mounted () {
        this.getProgramme()
    }
}
</script>
