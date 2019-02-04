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
        },
        removeUser(state, payload) {
            const index = _.findIndex(state.users, ["id", payload.id]);
            state.users.splice(index, 1);
        }
    },
    actions: {
        //remove(context, payload) {
        remove({commit,state}, payload) {
            setTimeout(() => {
                //context.commit("remove", payload);
                commit("removeUser", payload);
            }, 2000);

        }
    }
});