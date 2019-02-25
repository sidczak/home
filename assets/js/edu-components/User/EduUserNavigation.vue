<template functional>
    <div class="col-md-12">
        <ul class="nav nav-tabs mb-2">
            <li class="nav-item">
                <a class="nav-link" href="https://vuejs.org"><strong>Vue.js</strong></a>
            </li>
            <li class="nav-item">
                <router-link to="/home" class="nav-link" exact active-class="active">Home</router-link>
                <!-- <a class="nav-link" href="#">Home</a> -->
            </li>
        </ul>
        <ul class="list-inline mb-5">
            <router-link to="/" tag="li" class="list-inline-item" exact active-class="font-weight-bold">Home</router-link>
            <router-link to="/edu-user-list" tag="li" class="list-inline-item" active-class="font-weight-bold">Użytkownicy</router-link>
        </ul>
    </div>
</template>
<script>
    export default {
        name: "EduUserNavigation"
    };
</script>