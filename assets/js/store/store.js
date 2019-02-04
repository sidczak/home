import Vue from 'vue';
import Vuex from 'vuex';
import _ from 'lodash';
import getters from './getters';
import mutations from './mutations';
import actions from './actions';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        //message: "Hello world!"
        users: require("../data/users")
    },
    getters,
    mutations,
    actions
});