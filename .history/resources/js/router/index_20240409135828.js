import { createWebHistory, createRouter } from "vue-router";
import HomePage from '../pages/HomePage.vue'
const appRoutes = [
    {
        path: "/",
        component: HomePage,
        name: 'home.page'
    }
];
const routes = [...appRoutes];
const router = createRouter({
    history: createWebHistory(),
    routes,
});


export default router;
