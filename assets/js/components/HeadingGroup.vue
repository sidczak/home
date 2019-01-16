<template functional>
    <div>
        <h3>{{ props.heading }}</h3>
        <p>{{ props.subheading }}</p>
    </div>
</template>
<script>
    export default {
        name: "HeadingGroup",
        // functional: true,
        // props: ["heading", "subheading"],
        // render: function(h, context) {
        //     return h("div", [h("h3",context.props.heading),h("p",context.props.subheading)])
        // }
    };
</script>
<style scoped>
    h3 {
        margin-bottom: 50px;
    }
</style>