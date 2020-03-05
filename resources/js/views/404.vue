<template>
    <div class="container">
        <div class="error-404 not-found">
            <header>
                <h1 class="page-title">Oops! That page can’t be found.</h1>
            </header><!-- .page-header -->

			<div class="page-content">
                <p>It looks like nothing was found at this location. Maybe try a search</p>
                <form role="search" method="get" class="search-form" action="">
                    <label>
                        <span class="screen-reader-text">Search for:</span>
                        <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                    </label>
                    <input type="submit" class="search-submit" value="Search">
			    </form>
                <p>
                    <a class="button button-rounded button-light" href="/" data-pjax-state=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" class="svg-icon" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" role="img" focusable="false"><polyline points="15 18 9 12 15 6"></polyline></svg>Back to homepage</a>
				</p>
            </div><!-- .page-content -->
        </div><!-- .error-404 -->
	</div>
</template>

<script>
export default {
    name: 'Error404',
    metaInfo: {
        title: '404 Not Found'
    }
}
</script>
