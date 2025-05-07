import { createRouter, createWebHistory } from 'vue-router'

const routes = [
    {
        path: '/',
        name: 'Home',
        component: () => import('../components/HomePage.vue')
    },
    {
        path: '/file/:id',
        name: 'FilePage',
        component: () => import('../components/FilePage.vue'),
        props: true
    },
    {
        path: '/login',
        name: 'LoginPage',
        component: () => import('../components/LoginPage.vue')
    },
    {
        path: '/library',
        name: 'LibraryPage',
        component: () => import('../components/LibraryPage.vue')
    },
    {
        path: '/documentos',
        name: 'DocumentosPage',
        component: () => import('../components/DocumentosPage.vue')
    },
    {
        path: '/libros',
        name: 'LibrosPage',
        component: () => import('../components/LibrosPage.vue')
    },
    {
        path: '/videos',
        name: 'VideosPage',
        component: () => import('../components/VideosPage.vue')
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router