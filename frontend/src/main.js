import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";

// Bootstrap
import "bootstrap/dist/css/bootstrap.min.css";
import "jquery/src/jquery.js";
import "bootstrap/dist/js/bootstrap.min.js";
import "./assets/custom.scss";

createApp(App)
    .use(store)
    .use(router)
    .mount("#app");
