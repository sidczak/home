<template>
    <div id="app">
        <HelloWorld/>

        <form action="#">
            <div class="form-group row">
                <div class="col-2">
                    <label class="form-label">Wybierz wartość startową:</label>
                </div>
                <div class="col">
                    <select class="form-control" v-model="initValue" :disabled="inProgress">
                        <option v-for="i in 10" :value="i">{{ i }}</option>
                    </select>
                </div>
            </div>
        </form>
        <Counter :init-value="initValue" @progress="toggleState" />
        
    </div>
</template>

<script>
import HelloWorld from './components/HelloWorld'
import Counter from './components/Counter'

export default {
    name: 'App',
    components: {
        HelloWorld,
        Counter
    },
    data() {
        return {
            initValue: 10,
            inProgress: false
        }
    },
    methods: {
        toggleState: function(value) {
            this.inProgress = value;
        }
    }
}
</script>

<style>
#app {
  color: #2c3e50;
}
</style>