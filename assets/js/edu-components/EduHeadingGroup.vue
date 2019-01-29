<template functional>
    <div>
        <h3>{{ heading }}</h3>
        <p>{{ subheading }}</p>
    </div>
</template>
<script>
    export default {
        name: "EduHeadingGroup",
        props: ["heading", "subheading"]
    };
</script>
<style scoped>
    h3 {
        margin-bottom: 50px;
    }
</style>