<template>
    <div class="user-info">
        <h3>Dane użytkownika</h3>
        <template v-if="user">
            <p>{{user.name}}</p>
            <p>{{user.email}}</p>
        </template>
        <button class="btn btn-primary" :class="{'loading': loading}" :disabled="loading" @click="getData">Wyświetl dane</button>
    </div>
    
</template>
<script>
    export default {
        name: "User",
        data() {
            return {
                user: null,
                loading: false
            }
        },
        methods: {
            getData() {
                this.loading = true;
                setTimeout(() => {
                    this.user = {
                        name: "Jan Kowalski",
                        email: "jan@example.com"
                    };
                    this.loading = false;
                },1000);
            }
        }
    }
    
</script>