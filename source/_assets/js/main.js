window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent').default);

const app = new Vue({
    el: '#app'
});

if (window.netlifyIdentity) {
    window.netlifyIdentity.on("init", user => {
        if (!user) {
            window.netlifyIdentity.on("login", () => {
                document.location.href = "/admin/";
            });
        }
    });
}