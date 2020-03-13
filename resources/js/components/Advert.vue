<template>
    <div class="wp-block-column">
        <h3>Advertisment</h3>

        <div class="wp-block-column" v-if="adverts">

            <div class="wp-block-columns" v-for="ad in adverts" :key="ad.id">
                <div class="wp-block-cover has-pale-cyan-blue-background-color has-background-dim h-auto rounded" style="background-image:url(wp-content/uploads/2019/06/holder.png)">
                    <div class="wp-block-cover__inner-container" v-html="ad.content"></div>
                </div>
            </div>

        </div>
        <div class="wp-block-loop wp-block-loop-post post-thumbnail-16x9 align" ></div>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    name: 'Advert',
    data () {
        return {
            adverts: []
        }
    },
    methods: {
        getAdvert () {
            axios.get('/api/adverts')
                .then(res => {
                  res.data.forEach(item => {
                    this.adverts.push(item)
                  })
                })
                .catch(err => {
                    const error = err
                })
        },
        decodeHtml (data) {
            var txt = document.createElement('div')
            txt.innerHTML = data
            return txt.value
        }
    },
    mounted () {
      this.getAdvert()
    }
}
</script>
