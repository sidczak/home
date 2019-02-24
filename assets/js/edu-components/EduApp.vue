<template>
    <div>
        <div class="container">
            <div class="row">
                <router-view name="header"></router-view>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <router-view></router-view>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import router from '../router/router';
    
    export default {
        name: "EduApp",
        router
    };
</script>