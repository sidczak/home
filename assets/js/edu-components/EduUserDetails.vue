<template>
    <div>
        <h3>Szczegóły użytkownika</h3>
        <h4>{{ user.firstName }} {{ user.lastName }} ({{ user.id }})</h4>
        <p>Wiek: {{ user.age }}</p>
        <p>Płeć: {{ user.gender }}</p>
        <hr/>
        <router-view></router-view>
    </div>
    
</template>
<script>
    import store from '../store/store';
    export default {
        name: "EduUsersDetails",
        store,
        computed: {
        	user() {
        		return this.$store.getters.user( Number(this.$route.params.id) )
        	}
        }
    }
</script>