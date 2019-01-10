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
        name: 'Counter',
        props: ["initValue"],
        data() {
            return {
                counter: this.initValue,
                inProgress: false
            };
        },
        watch: {
            initValue: function(newValue) {
                this.counter = newValue;
            }
        },
        methods: {
            start: function() {
                this.countdown();
                this.inProgress = true;
                this.$emit("progress", this.inProgress);
            },
            countdown: function() {

                this.counter--;

                if(this.counter > 0) {
                    setTimeout(this.countdown, 1000);
                } else {
                    setTimeout(() => {
                        this.counter = this.initValue;
                        this.inProgress = false;
                        this.$emit("progress", this.inProgress);
                    }, 1000);
                }

            }
        }
    };

</script>