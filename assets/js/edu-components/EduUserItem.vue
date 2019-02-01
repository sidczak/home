<template>
    <tr>
        <td>{{ index + 1 }}.</td>
        <td>{{ user.firstName }} {{ user.lastName }}</td>
        <td>{{ user.age }}</td>
    </tr>
</template>
<script>
    export default {
        name: "EduUsersItems",
        props: ["user", "index"]
    }
</script>