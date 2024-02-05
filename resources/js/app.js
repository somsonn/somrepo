import "./bootstrap.js";
import { createApp } from "vue";
import back from './back/back.vue'
import router from "./router.js";
const app = createApp(back);
app.use(router);
app.mount("#app");

