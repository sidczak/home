<template>
    <div>
        <h3>Użytkownicy</h3>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Lp.</th>
                        <th>Imię i nazwisko</th>
                        <th>Wiek</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <EduUserItem v-for="(user, index) in $store.state.users" :user="user" :index="index" :key="user.id"></EduUserItem> -->
                    <EduUserItem v-for="(user, index) in users" :user="user" :index="index" :key="user.id"></EduUserItem>
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
    import EduUserItem from './EduUserItem';
    import store from '../store/store';
    
    export default {
        name: "EduUserList",
        store,
        components: {
            EduUserItem
        },
        computed: {
            users() {
                return this.$store.state.users;
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