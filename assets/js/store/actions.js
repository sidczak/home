export default {
    //remove(context, payload) {
    remove({commit,state}, payload) {
        setTimeout(() => {
            //context.commit("remove", payload);
            commit("removeUser", payload);
        }, 2000);

    }
};