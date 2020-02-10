<template>
    <div class="search-result">

        <div class="found" v-if="found">
            <div class="container clear">
                <h1 class="page-title">Search results for: <strong>aa</strong></h1>
            </div>

            <div class="container">
                <div class="block-loop-row">
                    <article class="block-loop-item station type-station status-publish has-post-thumbnail hentry entry">
                        <figure class="post-thumbnail">
                            <a class="post-thumbnail-inner" href="#" aria-hidden="true" tabindex="-1" data-pjax-state="">
                                <img width="1000" height="573" src="http://flatfull.com/wp/bepop/wp-content/uploads/2019/06/c3.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" sizes="(max-width: 1000px) 100vw, 1000px">
                            </a>
                            <div class="entry-action">
                                <button class="btn-play">play</button>
                            </div>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">
                                <a href="http://flatfull.com/wp/bepop/station/aaaa/" rel="bookmark">aaaa</a>
                            </h3>
                            <div class="entry-meta">
                                <span class="byline"><span class="author vcard"><a class="url fn n" href="#" data-pjax-state="">denemedir</a></span></span>
                            </div>
                        </header>
                    </article>
                </div>
            </div>

            <div class="programmes">

                <div class="container clear">
                    <h1 class="page-title">Programmes: </h1>
                </div>

                <div class="container">
                    <div class="block-loop-row">
                        <article class="block-loop-item station type-station status-publish has-post-thumbnail hentry entry">
                            <figure class="post-thumbnail">
                                <a class="post-thumbnail-inner" href="#" aria-hidden="true" tabindex="-1" data-pjax-state="">
                                    <img width="1000" height="573" src="http://flatfull.com/wp/bepop/wp-content/uploads/2019/06/c3.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" sizes="(max-width: 1000px) 100vw, 1000px">
                                </a>
                            </figure>

                            <header class="entry-header">
                                <h3 class="entry-title">
                                    <a href="http://flatfull.com/wp/bepop/station/aaaa/" rel="bookmark">aaaa</a>
                                </h3>
                            </header>
                        </article>
                    </div>
                </div>

            </div>


            <div class="blogs">

                <div class="container clear">
                    <h1 class="page-title">Blogs: </h1>
                </div>

                <div class="container">
                    <div class="block-loop-row">
                        <article class="block-loop-item station type-station status-publish has-post-thumbnail hentry entry">
                            <figure class="post-thumbnail">
                                <a class="post-thumbnail-inner" href="#" aria-hidden="true" tabindex="-1" data-pjax-state="">
                                    <img width="1000" height="573" src="http://flatfull.com/wp/bepop/wp-content/uploads/2019/06/c3.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" sizes="(max-width: 1000px) 100vw, 1000px">
                                </a>
                            </figure>

                            <header class="entry-header">
                                <h3 class="entry-title">
                                    <a href="http://flatfull.com/wp/bepop/station/aaaa/" rel="bookmark">aaaa</a>
                                </h3>
                                <div class="entry-meta">
                                    <span class="byline">
                                        <span class="svg-icon"><img alt="" src="" class="avatar avatar-48 photo" height="48" width="48"></span><span class="author vcard"><a class="url fn n" href="#">Kester</a></span>

                                        <span class="posted-on"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" class="svg-icon" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" role="img" focusable="false"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg><a href="#"><time class="entry-date published">June 30, 2019</time></a></span>

                                        <span class="cat-links"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" class="svg-icon" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" role="img" focusable="false"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line></svg><a href="#">sports</a></span></span>
                                </div>
                            </header>
                        </article>
                    </div>
                </div>

            </div>


        </div>


        <article class="no-results not-found" v-if="!found">
            <header class="entry-header">
                <h1>Nothing Found</h1>
            </header><!-- .page-header -->

            <div class="entry-content">

                <p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>

                <form role="search" method="get" class="search-form" action="">
                    <label>
                        <span class="screen-reader-text">Search for:</span>
                        <input type="search" class="search-field" placeholder="Search …" value="deffffff" name="s">
                    </label>
                    <input type="submit" class="search-submit" value="Search">
                </form>
                <p></p>

            </div>
        </article>

        <div class="container">
            <Advert />
        </div>

	</div>
</template>

<script>
import Advert from '../components/Advert'
import Navbar from '../components/Navbar'

export default {
    name: 'Search',
    components: {
        Advert,
        Navbar
    },
    data: () => ({
        found: true
    }),
    metaInfo: {
        title: 'Search Result'
    }
}
</script>
