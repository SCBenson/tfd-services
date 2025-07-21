import { createRouter, createWebHistory } from "vue-router/auto";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    { path: "/", component: () => import("@/components/home.vue") },
    { path: "/about", component: () => import("@/components/about.vue") },
    { path: "/contact", component: () => import("@/components/contact.vue") },
    { path: "/header", component: () => import("@/components/header.vue") },
    { path: "/footer", component: () => import("@/components/footer.vue") },
  ],
});

export default router;
