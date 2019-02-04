<template>
    <tr>
        <td>{{ index + 1 }}.</td>
        <td>
            <template v-if="editMode">
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name" :value="user.firstName" @change="update($event, 'firstName')">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name" :value="user.lastName" @change="update($event, 'lastName')">
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
                        <input type="number" class="form-control" placeholder="Age" :value="user.age" @change.number="update($event, 'age')">
                    </div>
                </div>
            </template>
            <template v-else>
                {{ user.age }}
            </template>
        </td>
        <td>
            <button class="btn btn-primary" @click="editMode = !editMode">
                <i class="fa" :class="{'fa-pencil': !editMode, 'fa-check': editMode}"></i>
            </button>
        </td>
        <td>
            <button class="btn btn-danger" @click="remove(user.id)">
                <i class="fa fa-trash"></i>
            </button>
        </td>
    </tr>
</template>
<script>
    export default {
        name: "EduUsersItems",
        props: ["user", "index"],
        data: function() {
            return {
                editMode: false
            };
        },
        methods: {
            update(e, type) {
                this.$store.commit("update", {
                    value: e.target.value,
                    type,
                    id: this.user.id
                });
            },
            remove(id) {
                this.$store.dispatch("remove", { id });
            }
        }
    }
</script>