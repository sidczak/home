<template>
    <div id="app">
        <HelloWorld/>
        <h3>Pokaz zdjęć</h3>
        <!-- <Slideshow :images="images"/> -->
        <router-view :images="images"></router-view>
    </div>
</template>

<script>
import axios from 'axios';
import HelloWorld from './components/HelloWorld';
import EduSlideshow from './components/EduSlideshow';

export default {
    name: 'App',
    components: {
        HelloWorld,
        EduSlideshow
    },
    props: {
        endpoint: String
    },
    data() {
        return {
            images: []
        };
    },
    created() {
        axios.get(this.endpoint)
            .then(res => this.images = res.data);
    }
}
</script>