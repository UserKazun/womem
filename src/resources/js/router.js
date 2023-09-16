import { createRouter, createWebHashHistory } from 'vue-router';
import Example from './components/Example.vue';
import ExampleTwo from './components/ExampleTwo.vue';

const routes = [
    { path: '/', component: Example },
    { path: '/example', component: ExampleTwo },
];

const router = createRouter({
    history: createWebHashHistory(),
    routes,
});

export default router;
