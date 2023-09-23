import { createRouter, createWebHashHistory } from 'vue-router';
import ExampleTwo from './components/ExampleTwo.vue';
import CardGrid from './components/CardGrid.vue';

const routes = [
    { path: '/', component: CardGrid },
    { path: '/example', component: ExampleTwo },
];

const router = createRouter({
    history: createWebHashHistory(),
    routes,
});

export default router;
