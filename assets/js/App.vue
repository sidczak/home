<template>
    <div id="app">
        <HelloWorld/>
        <!-- <edu-user-list></edu-user-list> -->
        <!-- <router-view></router-view> -->
    </div>
</template>

<script>
import HelloWorld from './components/HelloWorld';
//import router from './router/router';

export default {
    name: 'App',
    //router,
    components: {
        HelloWorld
    }
}
</script>