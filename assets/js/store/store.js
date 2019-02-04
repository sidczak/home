import Vue from 'vue';
import Vuex from 'vuex';
import _ from 'lodash';

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
    },
    mutations: {
        update(state, payload) {
            const index = _.findIndex(state.users, ["id", payload.id]);
            state.users[index][payload.type] = payload.value;
        }
    }
});