import Vue from 'vue';
import VueRouter from 'vue-router';

import routes from './routes';

Vue.use(VueRouter);

//export default new VueRouter({ routes });

const router = new VueRouter({ routes });

router.beforeEach((to, from, next) => {
	
	if(!to.meta.auth) {
		return next();
	}

    if(window.localStorage.getItem("token")) {
        next();
    } else {
        next({ name: "login" });
    }
    
});

export default router;