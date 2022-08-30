import VueRouter from "vue-router"
import Home from "./pages/home.vue"
import Contacts from "./pages/contacts.vue"
import PostShow from "./pages/posts/show.vue"


export const routes = [
    { path: "/", component: Home, name: "home" },
    { path: "/contatti", component: Contacts, name: "contacts" },
    { path: "/posts/idpost", component: PostShow, name: "post.show" }
]

// export default new VueRouter({
// routes
// })