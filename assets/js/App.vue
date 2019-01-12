<template>
    <div id="app">
        <HelloWorld/>
        <h3>Pokaz zdjęć</h3>
        <Slideshow :images="images"/>
    </div>
</template>

<script>
import HelloWorld from './components/HelloWorld'
import Slideshow from './components/Slideshow'

export default {
    name: 'App',
    components: {
        HelloWorld,
        Slideshow
    },
    data() {
        return {
            images: [
                {
                    "url": "http://code.eduweb.pl/kurs-vue/media/images/image-1.jpg"
                },
                {
                    "url": "http://code.eduweb.pl/kurs-vue/media/images/image-2.jpg"
                },
                {
                    "url": "http://code.eduweb.pl/kurs-vue/media/images/image-3.jpg"
                }
            ]
        }
    }
}
</script>