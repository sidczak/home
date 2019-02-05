<template>
    <tr>
        <td>{{ index + 1 }}.</td>
        <td>
            <template v-if="editMode">
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name" :value="user.firstName" @change="updateUser($event, 'firstName')">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name" :value="user.lastName" @change="updateUser($event, 'lastName')">
                    </div>
                </div>
            </template>
            <template v-else>
                {{ user.firstName }} {{ user.lastName }}
            </template>
        </td>
        <td>
            <template v-if="editMode">
                <div class="form-row">
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Age" :value="user.age" @change.number="updateUser($event, 'age')">
                    </div>
                </div>
            </template>
            <template v-else>
                {{ user.age }}
            </template>
        </td>
        <td>
            <router-link :to="'/edu-user-details/' + user.id" class="btn btn-primary">
                <i class="fa fa-search"></i>
            </router-link>
        </td>
        <td>
            <button class="btn btn-primary" @click="editMode = !editMode">
                <i class="fa" :class="{'fa-pencil': !editMode, 'fa-check': editMode}"></i>
            </button>
        </td>
        <td>
            <button class="btn btn-danger" @click="removeUser(user.id)">
                <i class="fa fa-trash"></i>
            </button>
        </td>
    </tr>
</template>
<script>
    import { mapMutations, mapActions } from 'vuex';
    export default {
        name: "EduUsersItems",
        props: ["user", "index"],
        data: function() {
            return {
                editMode: false
            };
        },
        methods: {
            ...mapMutations(["update"]),
            ...mapActions(["remove"]),
            updateUser(e, type) {
                this.update({
                    value: e.target.value,
                    type,
                    id: this.user.id
                });
            },
            removeUser(id) {
                this.remove({ id });
            }
        }
    }
</script>