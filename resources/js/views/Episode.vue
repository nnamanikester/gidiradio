<template>
    <article class="station type-station status-publish has-post-thumbnail hentry genre-country entry" v-if="episode.title">

        <div class="entry-header-container header-station">

            <figure class="post-thumbnail">
                <img width="1000" height="1164" :src="episodeSrc + episode.image" class="attachment-full size-full wp-post-image" alt="" style="object-position: 50% 100%" sizes="(max-width: 1000px) 100vw, 1000px">
            </figure>

            <header class="entry-header">
                <h1 class="entry-title">{{ episode.title }}</h1>
                <div class="entry-meta">
                    <button class="btn-play " data-play-id="169">play</button><span class="play-count">{{ episode.plays.length }} Plays</span>.
                    <span class="play-count">{{ episode.comments.length }} Comments</span>.
                    <span class="btn-like"> <span class="count"> {{ episode.views.length }} views</span></span>.
                    <span class="byline"><span class="svg-icon"><img alt="" :src="oapSrc + episode.oap.image" class="avatar avatar-48 photo" height="48" width="48"></span>
                    <span class="author vcard"><a class="url fn n" href="">{{ episode.oap.display_name }}</a></span></span>
                </div>
            </header>


        </div>

        <div class="entry-content">

            <div class="flex-row">
                <div class="flex">
                    <div class="wp-block-loop wp-block-loop-station ">
                        <h3>Episode Details</h3>

                        <p>
                            {{ episode.details }}
                        </p>

                    </div>

                    <div class="comments-area">
                        <ol class="comment-list" v-if="episode.comments">
					        <li class="comment byuser even thread-even depth-1 parent" v-for="comment in episode.comments" :key="comment.id">
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
    name: 'Episode',
    components: {
        Advert,
        Error404
    },
    data () {
        return {
            episode: [],
            episodeSrc: '/images/programmes/episodes/',
            oapSrc: '/images/oaps/',
            moment
        }
    },
    methods: {
        getEpisode () {
            axios.get(`/api/episode/${this.$route.params.episodeSlug}`)
                .then(res => {
                    res.data.forEach(item => {
                        this.episode = item
                    })
                })
                .catch(err => {
                    const error = err
                })
        }
    },
    mounted () {
        this.getEpisode()
    },
    metaInfo () {
        return {
            title: this.episode.title ? this.episode.title : ''
        }
    }
}
</script>
