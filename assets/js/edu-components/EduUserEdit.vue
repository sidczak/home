<template>

    <div>

        <h3>Edycja użytkownika</h3>

        <div class="form-group col-6">
            <label class="form-label">Imię</label>
            <input type="text" class="form-control" :value="user.firstName" @change="updateUser($event, 'firstName')">
        </div>

        <div class="form-group col-6">
            <label class="form-label">Nazwisko</label>
            <input type="text" class="form-control" :value="user.lastName" @change="updateUser($event, 'lastName')">
        </div>

        <div class="form-group col-6">
            <label class="form-label">Wiek</label>
            <input type="number" class="form-control" :value="user.age" @change="updateUser($event, 'age')" />
        </div>

        <div class="form-group col-6">
            <label class="form-label">Płeć</label>
            <select class="form-control" @change="updateUser($event, 'gender')">
                <option value="male" :selected="user.gender == 'male'">męska</option>
                <option value="female" :selected="user.gender == 'female'">żeńska</option>
            </select>
        </div>
        <hr/>
        <!-- <button class="btn btn-primary" @click="$router.go(-1)">Powrót</button> -->
        <!-- <button class="btn btn-primary" @click="$router.push('/edu-user-list')">Powrót</button> -->
        <button class="btn btn-primary" @click="$router.push({ name: 'userList' })">Powrót</button>
        <!-- <button class="btn btn-primary" @click="$router.push({ path: '/edu-user-list', query: { hello: 'Witam' } })">Powrót</button> -->
    </div>

</template>

<script>

    import { mapMutations } from "vuex";

    export default {
        name: "EduUserEdit",
        computed: {
            user() {
                return this.$store.getters.user( Number(this.$route.params.id) )
            }
        },
        methods: {
            ...mapMutations(["update"]),
            updateUser(e, type) {
                this.update({
                    id: this.user.id,
                    type: type,
                    value: e.target.value
                })
            },
        }
    };

</script>