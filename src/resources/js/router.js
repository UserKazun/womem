import { createRouter, createWebHashHistory } from 'vue-router';
import ExampleTwo from './components/ExampleTwo.vue';
import CardGrid from './components/CardGrid.vue';
import Login from "./components/Login.vue";
import apis from "./apis.js";

const routes = [
    {
        path: '/',
        component: CardGrid,
        props: {
            wordCards: [
                {id: 1, cardtitle: "Card1", cardSubTitle: "CardSubTitle1", cardText: "CardText1"},
                {id: 2, cardtitle: "Card2", cardSubTitle: "CardSubTitle2", cardText: "CardText2"},
                {id: 3, cardtitle: "Card3", cardSubTitle: "CardSubTitle3", cardText: "CardText3"},
                {id: 4, cardtitle: "Card4", cardSubTitle: "CardSubTitle4", cardText: "CardText4"},
                {id: 5, cardtitle: "Card5", cardSubTitle: "CardSubTitle5", cardText: "CardText5"},
            ],
        }
    },
    { path: '/example', name: "example",　component: ExampleTwo, meta: { requiresAuth: true } },
    { path: '/login', component: Login, ExampleTwo }
];

const router = createRouter({
    history: createWebHashHistory(),
    routes,
});

router.beforeEach((to, from, next) => {
    const isAuthenticated = apis.isAuthenticated;
    console.log(isAuthenticated);

    if (to.matched.some(record => record.meta.requiresAuth) && !isAuthenticated) {
        next('/login');
    } else if (to.matched.some(record => record.meta.requiresAuth) && isAuthenticated && apis.user === null) {
        try {
            apis.getMe().then(_ => {});
            next();
        } catch (e) {
            console.error('Error fetching user:', e);
        }
    }
    next();
});

export default router;
