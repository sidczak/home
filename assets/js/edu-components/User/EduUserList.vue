<template>
    <div>
        <h3>Użytkownicy</h3>
        <form action="#">
            <div class="form-group row">
                <div class="col-2">
                    <label class="form-label">Płeć:</label>
                </div>
                <div class="col">
                    <select class="form-control" v-model="gender">
                        <option value="">wszyscy</option>
                        <option value="male">mężczyźni</option>
                        <option value="female">kobiety</option>
                    </select>
                </div>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Lp.</th>
                        <th>Imię i nazwisko</th>
                        <th>Wiek</th>
                        <th>Szczegóły</th>
                        <th>Edytuj</th>
                        <th>Usuń</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <EduUserItem v-for="(user, index) in $store.state.users" :user="user" :index="index" :key="user.id"></EduUserItem> -->
                    <EduUserItem v-for="(user, index) in data" :user="user" :index="index" :key="user.id"></EduUserItem>
                </tbody>
            </table>
        </div>
        <ol>
            <!-- <li v-for="user in $store.state.users">{{ user.firstName }} {{ user.lastName }} - {{ user.age }}</li> -->
            <li v-for="user in users">{{ user.firstName }} {{ user.lastName }} - {{ user.age }}</li>
        </ol>
    </div>
</template>
<script>
    import { mapState, mapGetters } from 'vuex';
    import EduUserItem from './EduUserItem';
    import store from '../../store/store';
    
    export default {
        name: "EduUserList",
        store,
        components: {
            EduUserItem
        },
        computed: {
            ...mapState(["users"]),
            ...mapGetters(["female", "male"]),
            data() {
                if(this.gender === "female") {
                    return this.female;
                } else if(this.gender === "male") {
                    return this.male;
                } else {
                    return this.users;
                }
            }
        },
        data() {
            return {
                gender: ""
            }
        },
        // data() {
        //     return {
        //         users: require("../data/users")
        //         // users: [
        //         //     {id: 1, firstName: "Jan", lastName: "Kowalski", age: 32},
        //         //     {id: 2, firstName: "Anna", lastName: "Nowak", age: 27},
        //         //     {id: 3, firstName: "Tomasz", lastName: "Zieliński", age: 40},
        //         //     {id: 4, firstName: "Katarzyna", lastName: "Tomczak", age: 34},
        //         //     {id: 5, firstName: "Mariusz", lastName: "Murawski", age: 21}
        //         // ]
        //     }
        // },
        methods: {
        }
    }
</script>