<template>
    <footer id="footer" class="site-footer">
        <div class="container">
            <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
                <p style="color:#888888;font-size:12px;text-align:center" class="has-text-color">
                    {{ info.footer_text ? info.footer_text : '' }}
                </p>
                <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
        </div>
    </footer>
</template>

<script>
import db from '../database/db'

export default {
    name: 'Footer',
    data () {
        return {
            info: db.siteInfo
        }
    }
}
</script>
