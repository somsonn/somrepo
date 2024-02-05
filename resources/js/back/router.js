import { createRouter, createWebHashHistory } from "vue-router";
import dashbord from "./index.vue"
import scales from "./pages/scales/create.vue"
import city from "./pages/create_scales_table.vue"
const routes = [
    {
        path: "/dashbord",
        name: "dashbord",
        component: dashbord,
    },
    {
        path: "/scales",
        name: "scales",
        component: scales,
    },
    {
        path: "/posts",
        name: "post",
        component: city,
    }
];

const router = createRouter({
    history: createWebHashHistory(),
    routes,
});

export default router;
