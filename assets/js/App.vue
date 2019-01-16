<template>
    <div id="app">
        <HelloWorld headingTag="h5"/>
        <User/>
        <hr/>
        <Product/>
    </div>
</template>

<script>
import HelloWorld from './components/HelloWorld'
import User from './components/User'
import Product from './components/Product'

export default {
    name: 'App',
    components: {
        HelloWorld,
        User,
        Product
    }
}
</script>