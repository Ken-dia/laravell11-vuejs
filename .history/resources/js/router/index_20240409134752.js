import { createWebHistory, createRouter } from "vue-router";
const appRoutes = [

];
const routes = [...appRoutes];
const router = createRouter({
    history: createWebHistory(),
    routes,
});


export default router;
