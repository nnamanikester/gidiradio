<template>
    <div class="page-header">
        <nav class="user-navigation">
            <div class="container">
                <ul class="nav">
                    <li>
                        <router-link class="sub-ajax"  :to="{ name: 'Programme', params: { title: 'the-return-of-xander' } }">Return</router-link>
                    </li>
                    <li>
                        <router-link class="sub-ajax"  :to="{ name: 'Episode', params: { title: 'the-return-of-xander', episode: 'episode-1' } }">Episode 1</router-link>
                    </li>
                    <li>
                        <router-link class="sub-ajax"  :to="{ name: 'Profile', params: { oapName: 'john-kester' }  }">OAP Profile</router-link>
                    </li>
                    <li>
                        <router-link class="sub-ajax"  :to="{ name: 'Blog', params: { title: 'the-best-soup-in-the-world' }  }">Blog Post</router-link>
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
