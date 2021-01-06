import vueRouter from 'vue-router';//Нашы установленые роуты
import Vue from 'vue';//Наш главные vue


Vue.use(vueRouter);

import index from "./views/index";
import blog from "./views/blog";
import post from  "./views/posts_show";
import create from "./views/create_post";
const routes = [
    {
        path: "/",
        component: index
    },
    {
        path: "/blog",
        component: blog
    },
    {
        path: "/post/:id",//Передача данных идет таким образом:)
        component: post
    },
    {
        path: "/create",//Передача данных идет таким образом:)
        component: create
    },
];

export default new vueRouter({
    mode: "history",//Тип роутов | сохранение роутов
    routes: routes,
})

