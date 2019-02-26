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
                    <transition name="slide" mode="out-in" appear>
                        <router-view :key="$route.fullPath"></router-view>
                    </transition>
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
<style lang="scss" scoped>
    .slide-enter-active,
    .slide-leave-active {
        transition: transform 0.5s ease-in-out;
    }
    .slide-enter {
        transform: translateX(-100vw);
    }
    .slide-leave-to {
        transform: translateX(100vw);
    }
</style>