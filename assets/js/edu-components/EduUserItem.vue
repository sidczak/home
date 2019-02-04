<template>
    <tr>
        <td>{{ index + 1 }}.</td>
        <td>
            <template v-if="editMode">
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name" v-model.lazy="user.firstName">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name" v-model.lazy="user.lastName">
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
                        <input type="number" class="form-control" placeholder="Age" v-model.lazy="user.age">
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
        }
    }
</script>