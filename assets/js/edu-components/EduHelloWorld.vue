<template>
    <div class="hello">
        <h2>{{ msg }}</h2>
    </div>
</template>

<script>
export default {
    name: 'EduHelloWorld',
    data () {
        return {
            msg: 'Welcome to Your Vue.js App'
        }
    }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .hello {
        border: 1px solid blue;
    }
</style>