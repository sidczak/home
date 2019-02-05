export default {
	user(state) {
		return id => {
			const index = _.findIndex(state.users, ["id", id]);
			return state.users[index];
		};
	},
    female(state) {
        return state.users.filter(user => user.gender === "female");
    },
    male(state) {
        return state.users.filter(user => user.gender === "male");
    }
};