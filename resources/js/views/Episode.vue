<template>
    <article class="station type-station status-publish has-post-thumbnail hentry genre-country entry">

        <div class="entry-header-container header-station">

            <figure class="post-thumbnail">
                <img width="1000" height="1164" src="http://flatfull.com/wp/bepop/wp-content/uploads/2019/06/pexels-photo-2092474.jpeg" class="attachment-full size-full wp-post-image" alt="" style="object-position: 50% 100%" sizes="(max-width: 1000px) 100vw, 1000px">
            </figure>

            <header class="entry-header">
                <h1 class="entry-title">Episode 1 - The Return Of Rangers</h1>
                <div class="entry-meta">
                    <button class="btn-play " data-play-id="169">play</button><span class="play-count">100 Plays</span>.
                    <span class="play-count">1.1K Comments</span>.
                    <span class="btn-like"> <span class="count"> 9 views</span></span>.
                    <span class="byline"><span class="svg-icon"><img alt="" src="http://flatfull.com/wp/bepop/wp-content/uploads/2019/06/Adam-Stefancik_avatar-96x96.jpeg" class="avatar avatar-48 photo" height="48" width="48"></span>
                    <span class="author vcard"><a class="url fn n" href="">Kester</a></span></span>
                </div>
            </header>


        </div>

        <div class="entry-content">

            <div class="flex-row">
                <div class="flex">
                    <div class="wp-block-loop wp-block-loop-station ">
                        <h3>Episode Details</h3>

                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero quas, ea maiores iusto modi vel voluptatibus.
                            Perferendis ea incidunt dolorum iure dicta dolorem, doloremque ut, hic adipisci voluptate atque reprehenderit?
                        </p>

                    </div>

                    <div class="comments-area">
                        <ol class="comment-list">
					        <li class="comment byuser even thread-even depth-1 parent">
                                <article id="div-comment-87" class="comment-body">
                                    <footer class="comment-meta">
                                        <div class="comment-author vcard">
                                            <img alt="" src="http://0.gravatar.com/avatar/ff7f090e3d537b2106e5e0b4277459c3?s=96&amp;d=mm&amp;r=g" class="avatar avatar-96 photo" height="96" width="96"><b class="fn">kester</b> <span class="says">says:</span>
                                        </div>
                                        <div class="comment-metadata">
                                            <time>February 5, 2020 at 11:19 pm</time>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        <p>oujhpfrsdv</p>
                                    </div>

                                    <div class="reply"><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></div>
                                </article>

                                <!-- <ol class="children">
                                    <li class="comment byuser odd alt depth-2">
                                        <article id="div-comment-88" class="comment-body">
                                            <footer class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <img alt="" src="http://0.gravatar.com/avatar/ff7f090e3d537b2106e5e0b4277459c3?s=96&amp;d=mm&amp;r=g" class="avatar avatar-96 photo" height="96" width="96"><b class="fn"><a href="#" rel="external nofollow ugc" class="url">kester</a></b> <span class="says">says:</span>
                                                </div>

                                                <div class="comment-metadata">
                                                        <time>February 5, 2020 at 11:20 pm</time>
                                                </div>
                                            </footer>

                                            <div class="comment-content">
                                                <p>replie</p>
                                            </div>

                                            <div class="reply"><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></div>
                                        </article>
                                    </li>
                                </ol> -->

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
</template>

<script>
import Advert from '../components/Advert'

export default {
    name: 'Episode',
    components: {
        Advert
    },
    metaInfo: {
        title: 'Episode Number'
    }
}
</script>
