import { createWebHistory, createRouter } from "vue-router";

import Login from "../views/Login.vue";
import Community from "../views/Community.vue";
import CommunityList from "../views/CommunityList.vue";

// import About from "@/views/About.vue";
//import login from './components/auth/Login.vue'

const routes = [
    {
        path: "/",
        name: "Login",
        component: Login,
    },
    {
        path: "/community",
        name: "Community",
        component: Community,
    },
    {
        path: "/community/list",
        name: "CommunityList",
        component: CommunityList,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
