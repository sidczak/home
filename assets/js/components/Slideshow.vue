<template>
    <div class="slides-wrapper" :class="{'loading': isLoading}">

        <button class="btn btn-primary btn-lg slides-prev" :disabled="start || isLoading" @click="changeSlide(-1)">
            <i class="fa fa-angle-left"></i>
        </button>

        <div class="slides">
            <Slide :url="activeUrl" :number="number" :class="{'dimmed': isLoading}"/>
        </div>

        <button class="btn btn-primary btn-lg slides-next" :disabled="end || isLoading" @click="changeSlide(1)">
            <i class="fa fa-angle-right"></i>
        </button>

    </div>
</template>
<script>
    import {preloadImage} from "../helpers/helpers";
    import Slide from "./Slide";

    export default {
        name: 'Slideshow',
        props: {
            images: Array
        },
        data() {
            return {
                active: 0,
                isLoading: false
            }
        },
        components: {
            Slide
        },
        computed: {
            activeUrl() {
                return this.images[this.active].url
            },
            number() {
                return `${this.active + 1}/${this.images.length}`;
            },
            start() {
                return this.active === 0;
            },
            end() {
                return this.active === this.images.length - 1;
            }
        },
        methods: {
            changeSlide(dir) {
                let index = this.active + dir;
                let slide = this.images[index];
                
                if(slide !== undefined) {
                    //this.active = index;
                    this.isLoading = true;
                    preloadImage(this.images[index].url)
                        .then(url => {
                            this.active = index;
                            this.isLoading = false;
                        });
                }
            }
        }
    }
</script>
<style lang="scss" scoped>
    .slides {
        &-wrapper {
            min-height: 300px;
            position: relative;
        }
        &-next,
        &-prev {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
        &-prev {
            left: 0;
        }

        &-next {
            right: 0;
        }
    }
</style>