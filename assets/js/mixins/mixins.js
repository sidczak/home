export const loading = {
 	data() {
 		return {
 			loading: false
 		};
 	},
 	methods: {
 		toggleLoading() {
 			this.loading = !this.loading
 		}
 	}
};