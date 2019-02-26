<template>

    <div>

        <h3>Logowanie</h3>

        <form action="#" @submit.prevent="login">
            <div class="form-group row">
                <div class="col-2">
                    <label class="form-label">Hasło</label>
                </div>
                <div class="col">
                    <input type="password" class="form-input" v-model="password">
                </div>
            </div>
            <div class="col-5">
                <button class="btn btn-primary float-right" :class="{ loading: loading }" :disabled="!password || loading">Zaloguj</button>
            </div>
        </form>

    </div>

</template>

<script>
    export default {
        name: "EduUserLogin",
        data() {
            return {
                password: "",
                loading: false
            };
        },
        methods: {
            login() {

                this.loading = true;

                setTimeout(() => {
                    this.loading = false;

                    window.localStorage.setItem("token", Math.random().toString(16).slice(2) );

                    this.$router.push({ name: "home" });

                }, 1500);

            }
        }
    };
</script>