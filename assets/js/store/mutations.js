export default {
    update(state, payload) {
        const index = _.findIndex(state.users, ["id", payload.id]);
        state.users[index][payload.type] = payload.value;
    },
    removeUser(state, payload) {
        const index = _.findIndex(state.users, ["id", payload.id]);
        state.users.splice(index, 1);
    }
};