
require('./bootstrap');

const app = new Vue({
    el: '#app',
    data: {
        boolAuth: localStorage.getItem("boolAuth") !== null ? localStorage.getItem("boolAuth") : false
    },
    computed: {
        checkRoutes: function () {
            if (this.boolAuth) {
                return [{ path: '/login', component: require('./components/Login.vue') },{ path: '/register', component: require('./components/Register.vue') }];
            } else {
                return [{ path: '/main', component: require('./components/Main.vue') }];
            }
        }
    },
    router: new VueRouter({
        routes: this.checkRoutes
    }),
    created: function () {
      console.log(this.checkRoutes)
    },
    components: {
        "my-menu": require('./components/Menu.vue')
    }
});
