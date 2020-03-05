import Vue from 'vue'
import VueRouter from 'vue-router'
import VueMeta from 'vue-meta'

Vue.use(VueRouter)
Vue.use(VueMeta)

const routes = [
    {
        path: '/home',
        name: 'Home',
        component: () =>
            import ('../views/Home.vue')
    },
    {
        path: '/programme/:slug',
        name: 'Programme',
        component: () =>
            import ('../views/Programme.vue')
    },
    {
        path: '/programme/:programmeSlug/:episodeSlug',
        name: 'Episode',
        component: () =>
            import ('../views/Episode.vue')
    },
    {
        path: '/blog/:slug',
        name: 'Blog',
        component: () =>
            import ('../views/Blog.vue')
    },
    {
        path: '/profile/:slug',
        name: 'Profile',
        component: () =>
            import ('../views/OAPProfile.vue')
    },
    {
        path: '/search',
        name: 'Search',
        component: () =>
            import ('../views/SearchResult.vue')
    },
    {
        path: '/page/:slug',
        name: 'Page',
        component: () =>
            import ('../views/pages/Page.vue')
    },
    {
        path: '**',
        component: () =>
            import ('../views/404.vue')
    }
]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router