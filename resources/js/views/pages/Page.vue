<template>
<div v-if="pageLoading" class="justify-content-center loader">
  <div class="spinner-border text-primary" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>
  <article class="page type-page status-publish hentry entry" v-else-if="page.title">
    <div class="entry-header-container">
      <header class="entry-header">
        <h1 class="entry-title">{{ page.title }}</h1>
      </header>
    </div>

    <div class="entry-content">
      <p>
        {{ page.content }}
      </p>
    </div>
  </article>
  <Error404 v-else />
</template>

<script>
import axios from 'axios'
import Error404 from '../404'

export default {
  name: 'Page',
  components: {
    Error404
  },
  data () {
    return {
      page: [],
      pageLoading: true
    }
  },
  methods: {
    getPage () {
      axios.get(`/api/page/${this.$route.params.slug}`)
        .then(res => {
          res.data.forEach(item => {
            this.page = item
          })
          if (this.page.title) {
            this.pageLoading = false
          } else {
            this.pageLoading = false
          }
        })
        .catch(err => {
          const error = err
          this.pageLoading = false
        })
    }
  },
  mounted () {
    this.getPage()
  },
  metaInfo () {
    title: this.page.title ? this.page.title : ''
  }
}
</script>

<style>
  .loader {
    width: 100%;
    height: 100vh;
    text-align: center;
    margin-top: 40vh;
  }
</style>