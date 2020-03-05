<template>
    <div class="page-header">
        <nav class="user-navigation">
            <div class="container">
                <ul class="nav">
                    <li>
                        <router-link class="sub-ajax"  :to="{ name: 'Programme', params: { slug: 'programme-1' } }">Return</router-link>
                    </li>
                    <li>
                        <router-link class="sub-ajax"  :to="{ name: 'Episode', params: { programmeSlug: 'programme-1', episodeSlug: 'episode-1' } }">Episode 1</router-link>
                    </li>
                    <li>
                        <router-link class="sub-ajax"  :to="{ name: 'Profile', params: { slug: 'john-kester' }  }">OAP Profile</router-link>
                    </li>
                    <li>
                        <router-link class="sub-ajax"  :to="{ name: 'Blog', params: { slug: 'the-best-soup-in-the-world' }  }">Blog Post</router-link>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: 'Navbar',
    data () {
        return {

        }
    }
}
</script>
