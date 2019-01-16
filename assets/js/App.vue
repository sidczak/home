<template>
    <div id="app">
        <HelloWorld headingTag="h5"/>
        <HeadingGroup heading="Witaj świecie" subheading="Hello world!!!"/>
    </div>
</template>

<script>
import HelloWorld from './components/HelloWorld'
import HeadingGroup from './components/HeadingGroup'

export default {
    name: 'App',
    components: {
        HelloWorld,
        HeadingGroup
    }
}
</script>