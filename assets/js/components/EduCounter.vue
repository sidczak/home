<template>
    <div class="row justify-content-center">
        <div class="col-8 text-center">
            <div class="alert alert-primary" v-show="!inProgress">Naciśnij <strong>Start</strong> aby rozpocząć odliczanie.</div>
            <h4>{{ counter }}</h4>
            <button class="btn btn-primary" @click="start" :disabled="inProgress">Start</button>
        </div>
    </div>
</template>
<script>
    export default {
        name: "EduCounter",
        props: ["headingTag"],
        data () {
            return {
                counter: 10,
                inProgress: false
            }
        },
        methods: {
            start: function() {
                this.inProgress = true;
                this.countdown();
            },
            countdown: function() {
                this.counter--;
                if(this.counter > 0) {
                    setTimeout(this.countdown, 1000);
                } else {
                    setTimeout(() => {
                        this.counter = 10;
                        this.inProgress = false;
                    }, 1000);
                }
            }
        }
        
    };
</script>
<style scoped>
</style>