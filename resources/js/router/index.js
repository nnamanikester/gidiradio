import Vue from 'vue'
import VueRouter from 'vue-router'
import VueMeta from 'vue-meta'

Vue.use(VueRouter)
Vue.use(VueMeta)

const routes = [{
        path: '/programme/:title',
        name: 'Programme',
        component: () =>
            import ('../views/Programme.vue')
    },
    {
        path: '/programme/:title/:episode',
        name: 'Episode',
        component: () =>
            import ('../views/Episode.vue')
    },
    {
        path: '/blog/:title',
        name: 'Blog',
        component: () =>
            import ('../views/Blog.vue')
    },
    {
        path: '/profile/:oapName',
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
        path: '/contact',
        name: 'Contact',
        component: () =>
            import ('../views/pages/Contact.vue')
    },
    {
        path: '/about',
        name: 'About',
        component: () =>
            import ('../views/pages/About.vue')
    },
    {
        path: '/dmca',
        name: 'DMCA',
        component: () =>
            import ('../views/pages/DMCA.vue')
    },
    {
        path: '/privacy-policy',
        name: 'Policy',
        component: () =>
            import ('../views/pages/Policy.vue')
    },
    {
        path: '/terms-of-use',
        name: 'Terms',
        component: () =>
            import ('../views/pages/Terms.vue')
    },
    {
        path: '*',
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