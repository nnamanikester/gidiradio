<template>
    <div class="wp-block-column">
        <h3>Advertisment</h3>

        <div class="wp-block-column">

            <div class="wp-block-columns">
                <div class="wp-block-cover has-pale-cyan-blue-background-color has-background-dim h-auto rounded" style="background-image:url(wp-content/uploads/2019/06/holder.png)">
                    <div class="wp-block-cover__inner-container">
                        <p style="text-align:center" class="has-medium-font-size">MTN EVERYWHERE YOU GO</p>
                    </div>
                </div>
            </div>

            <div class="wp-block-columns">
                <div class="wp-block-cover has-background-dim h-auto gd-primary rounded" style="background-image:url(wp-content/uploads/2019/06/holder.png)">
                    <div class="wp-block-cover__inner-container">
                        <p style="color:#ffffff;text-align:center" class="has-text-color has-medium-font-size">INDOMIE INSTANT NOODLES</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="wp-block-loop wp-block-loop-post post-thumbnail-16x9 align" ></div>
    </div>
</template>

<script>
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
                    console.log(res.data)
                })
                .catch(err => {
                    console.log(err)
                })
        }
    }
}
</script>
