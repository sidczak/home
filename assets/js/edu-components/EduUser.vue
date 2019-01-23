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
    import {loading} from '../mixins/mixins'
    export default {
        name: "EduUser",
        mixins: [loading],
        data() {
            return {
                user: null
            }
        },
        methods: {
            getData() {
                this.toggleLoading();
                setTimeout(() => {
                    this.user = {
                        name: "Jan Kowalski",
                        email: "jan@example.com"
                    };
                    this.toggleLoading();
                },1000);
            }
        }
    }
    
</script>