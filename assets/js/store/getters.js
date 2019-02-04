export default {
    female(state) {
        return state.users.filter(user => user.gender === "female");
    },
    male(state) {
        return state.users.filter(user => user.gender === "male");
    }
};