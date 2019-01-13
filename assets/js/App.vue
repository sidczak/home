<template>
    <div id="app">
        <HelloWorld/>
        <h3>Pokaz zdjęć</h3>
        <Slideshow :images="images"/>
    </div>
</template>

<script>
import axios from 'axios';
import HelloWorld from './components/HelloWorld';
import Slideshow from './components/Slideshow';

export default {
    name: 'App',
    components: {
        HelloWorld,
        Slideshow
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