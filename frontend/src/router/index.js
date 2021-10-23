import { createRouter, createWebHashHistory } from "vue-router";

const routes = [
    {
        path: "/",
        redirect: "/home"
    },
    {
        path: "/home",
        name: "Home",
        component: () => import(/* webpackChunkName: "home" */ "../views/Home.vue")
    },
    {
        path: "/dashboard",
        name: "Dashboard",
        component: () => import(/* webpackChunkName: "dashboard" */ "../views/Dashboard.vue")
    },
    {
        path: "/crew-members",
        name: "CrewMembers",
        component: () => import(/* webpackChunkName: "crew-members" */ "../views/CrewMembers.vue")
    },
    {
        path: "/ships",
        name: "Ships",
        component: () => import(/* webpackChunkName: "ships" */ "../views/Ships.vue")
    },
    {
        path: "/:catchAll(.*)",
        name: "NotFound",
        component: () => import(/* webpackChunkName: "webpack-not-found" */ "../views/NotFound.vue"),
    },
];

const router = createRouter({
    history: createWebHashHistory(),
    routes
});

export default router;
