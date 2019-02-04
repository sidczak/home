import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        //message: "Hello world!"
        users: require("../data/users")
    },
    getters: {
        female(state) {
            return state.users.filter(user => user.gender === "female");
        },
        male(state) {
            return state.users.filter(user => user.gender === "male");
        }
    }
});