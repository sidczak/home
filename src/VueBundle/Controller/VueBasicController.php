<?php

namespace VueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VueBasicController extends Controller
{
    public function indexAction()
    {
        return $this->render('VueBundle:VueBasic:index.html.twig');
    }
    
    public function example1Action()
    {
        return $this->render('VueBundle:VueBasic:example1.html.twig',[
			'title' => 'Welcome Vue Basic - example1'
        ]);
    }

    public function example2Action()
    {
        return $this->render('VueBundle:VueBasic:example2.html.twig',[
			'title' => 'Welcome Vue Basic - example2 - Hello World z Vue'
        ]);
    }

    public function example3Action()
    {
        return $this->render('VueBundle:VueBasic:example3.html.twig',[
			'title' => 'Welcome Vue Basic - example3 - metody'
        ]);
    }
    
    public function example4Action()
    {
        return $this->render('VueBundle:VueBasic:example4.html.twig',[
			'title' => 'Welcome Vue Basic - example4 - Wyliczone właściwości'
        ]);
    }

    public function example5Action()
    {
        return $this->render('VueBundle:VueBasic:example5.html.twig',[
            'title' => 'Welcome Vue Basic - example5 - Praca z szablonem'
        ]);
    }

    public function example6Action()
    {
        return $this->render('VueBundle:VueBasic:example6.html.twig',[
            'title' => 'Welcome Vue Basic - example6 - Atrybuty'
        ]);
    }

    public function example7Action()
    {
        return $this->render('VueBundle:VueBasic:example7.html.twig',[
            'title' => 'Welcome Vue Basic - example7 - Jak działają gettery i settery'
        ]);
    }

    public function example8Action()
    {
        return $this->render('VueBundle:VueBasic:example8.html.twig',[
            'title' => 'Welcome Vue Basic - example8 - Instancja Vue z bliska'
        ]);
    }

    public function example9Action()
    {
        return $this->render('VueBundle:VueBasic:example9.html.twig',[
            'title' => 'Welcome Vue Basic - example9 - Montowanie aplikacji'
        ]);
    }

    public function example10Action()
    {
        return $this->render('VueBundle:VueBasic:example10.html.twig',[
            'title' => 'Welcome Vue Basic - example10 - Montowanie aplikacji'
        ]);
    }

    public function example11Action()
    {
        return $this->render('VueBundle:VueBasic:example11.html.twig',[
            'title' => 'Welcome Vue Basic - example11 - Przypisywanie obsługi zdarzeń'
        ]);
    }

    public function example12Action()
    {
        return $this->render('VueBundle:VueBasic:example12.html.twig',[
            'title' => 'Welcome Vue Basic - example12 - Przypisywanie obsługi zdarzeń'
        ]);
    }

    public function example13Action()
    {
        return $this->render('VueBundle:VueBasic:example13.html.twig',[
            'title' => 'Welcome Vue Basic - example13 - Modyfikatory zdarzeń'
        ]);
    }

    public function example14Action()
    {
        return $this->render('VueBundle:VueBasic:example14.html.twig',[
            'title' => 'Welcome Vue Basic - example14 - Modyfikatory klawiszy'
        ]);
    }

    public function example15Action()
    {
        return $this->render('VueBundle:VueBasic:example15.html.twig',[
            'title' => 'Welcome Vue Basic - example15 - Praca z klasami CSS'
        ]);
    }

    public function example16Action()
    {
        return $this->render('VueBundle:VueBasic:example16.html.twig',[
            'title' => 'Welcome Vue Basic - example16 - Liniowe style CSS'
        ]);
    }

    public function example17Action()
    {
        return $this->render('VueBundle:VueBasic:example17.html.twig',[
            'title' => 'Welcome Vue Basic - example17 - Warunkowe pokazywanie elementów'
        ]);
    }
    
    public function example18Action()
    {
        return $this->render('VueBundle:VueBasic:example18.html.twig',[
            'title' => 'Welcome Vue Basic - example18 - Korzystanie z pętli'
        ]);
    }

    public function example19Action()
    {
        return $this->render('VueBundle:VueBasic:example19.html.twig',[
            'title' => 'Welcome Vue Basic - example19 - Unikalność elementów'
        ]);
    }

    public function example20Action()
    {
        return $this->render('VueBundle:VueBasic:example20.html.twig',[
            'title' => 'Welcome Vue Basic - example20 - Grupowanie elementów'
        ]);
    }

    public function example21Action()
    {
        return $this->render('VueBundle:VueBasic:example21.html.twig',[
            'title' => 'Welcome Vue Basic - example21 - Counter - Odliczanie'
        ]);
    }

    public function example22Action()
    {
        return $this->render('VueBundle:VueBasic:example22.html.twig',[
            'title' => 'Welcome Vue Basic - example22 - Uchwyty do elementów z DOM'
        ]);
    }

    public function example23Action()
    {
        return $this->render('VueBundle:VueBasic:example23.html.twig',[
            'title' => 'Welcome Vue Basic - example23 - Dwukierunkowe wiązanie danych'
        ]);
    }

    public function example24Action()
    {
        return $this->render('VueBundle:VueBasic:example24.html.twig',[
            'title' => 'Welcome Vue Basic - example24 - Własna implementacja modelu'
        ]);
    }

    public function example25Action()
    {
        return $this->render('VueBundle:VueBasic:example25.html.twig',[
            'title' => 'Welcome Vue Basic - example25 - Praca z radio i checkbox'
        ]);
    }

    public function example26Action()
    {
        return $this->render('VueBundle:VueBasic:example26.html.twig',[
            'title' => 'Welcome Vue Basic - example26 - Praca z polem select'
        ]);
    }

    public function example27Action()
    {
        return $this->render('VueBundle:VueBasic:example27.html.twig',[
            'title' => 'Welcome Vue Basic - example27 - Kontrolowanie zwracanych wartości'
        ]);
    }

    public function example28Action()
    {
        return $this->render('VueBundle:VueBasic:example28.html.twig',[
            'title' => 'Welcome Vue Basic - example28 - Obserwowanie zmian wartości'
        ]);
    }

    public function example29Action()
    {
        return $this->render('VueBundle:VueBasic:example29.html.twig',[
            'title' => 'Welcome Vue Basic - example29 - Tworzenie własnych filtrów'
        ]);
    }

    public function example30Action()
    {
        return $this->render('VueBundle:VueBasic:example30.html.twig',[
            'title' => 'Welcome Vue Basic - example30 - Sposoby na filtrowanie danych'
        ]);
    }

    public function example31Action()
    {
        return $this->render('VueBundle:VueBasic:example31.html.twig',[
            'title' => 'Welcome Vue Basic - example31 - Tworzenie własnych dyrektyw'
        ]);
    }

    public function example32Action()
    {
        return $this->render('VueBundle:VueBasic:example32.html.twig',[
            'title' => 'Welcome Vue Basic - example32 - Tworzenie własnych komponentów'
        ]);
    }

    public function example33Action()
    {
        return $this->render('VueBundle:VueBasic:example33.html.twig',[
            'title' => 'Welcome Vue Basic - example33 - Przekazywanie danych'
        ]);
    }

    public function example34Action()
    {
        return $this->render('VueBundle:VueBasic:example34.html.twig',[
            'title' => 'Welcome Vue Basic - example34 - Walidacja przekazywanych danych'
        ]);
    }

    public function example35Action()
    {
        return $this->render('VueBundle:VueBasic:example35.html.twig',[
            'title' => 'Welcome Vue Basic - example35 - Komunikacja pomiędzy komponentami w dół'
        ]);
    }

    public function example36Action()
    {
        return $this->render('VueBundle:VueBasic:example36.html.twig',[
            'title' => 'Welcome Vue Basic - example36 - Komunikacja pomiędzy komponentami w górę'
        ]);
    }

    public function example37Action()
    {
        return $this->render('VueBundle:VueBasic:example37.html.twig',[
            'title' => 'Welcome Vue Basic - example37 - Synchronizacja właściwości'
        ]);
    }

    public function example38Action()
    {
        return $this->render('VueBundle:VueBasic:example38.html.twig',[
            'title' => 'Welcome Vue Basic - example38 - Inne metody komunikacji'
        ]);
    }

    public function example39Action()
    {
        return $this->render('VueBundle:VueBasic:example39.html.twig',[
            'title' => 'Welcome Vue Basic - example39 - Edytowalna lista użytkowników cz.1'
        ]);
    }

    public function example40Action()
    {
        return $this->render('VueBundle:VueBasic:example40.html.twig',[
            'title' => 'Welcome Vue Basic - example40 - Edytowalna lista użytkowników cz.2'
        ]);
    }

    public function example41Action()
    {
        return $this->render('VueBundle:VueBasic:example41.html.twig',[
            'title' => 'Welcome Vue Basic - example41 - Edytowalna lista użytkowników cz.3'
        ]);
    }

    public function example42Action()
    {
        return $this->render('VueBundle:VueBasic:example42.html.twig',[
            'title' => 'Welcome Vue Basic - example42 - Dynamiczna podmiana komponentów'
        ]);
    }

    public function example43Action()
    {
        return $this->render('VueBundle:VueBasic:example43.html.twig',[
            'title' => 'Welcome Vue Basic - example43 - Kontrola treści komponentu za pomocą slotu'
        ]);
    }

    public function example44Action()
    {
        return $this->render('VueBundle:VueBasic:example44.html.twig',[
            'title' => 'Welcome Vue Basic - example44 - Tworzenie wielu slotów'
        ]);
    }

    public function example45Action()
    {
        return $this->render('VueBundle:VueBasic:example45.html.twig',[
            'title' => 'Welcome Vue Basic - example45 - Implementacja modelu na komponencie'
        ]);
    }

    public function example46Action()
    {
        return $this->render('VueBundle:VueBasic:example46.html.twig',[
            'title' => 'Welcome Vue Basic - example46 - Podstawy animacji'
        ]);
    }

    public function example47Action()
    {
        return $this->render('VueBundle:VueBasic:example47.html.twig',[
            'title' => 'Welcome Vue Basic - example47 - Animacje zmiany komponentu'
        ]);
    }

    public function example48Action()
    {
        return $this->render('VueBundle:VueBasic:example48.html.twig',[
            'title' => 'Welcome Vue Basic - example48 - Animacje listy'
        ]);
    }

    public function example49Action()
    {
        return $this->render('VueBundle:VueBasic:example49.html.twig',[
            'title' => 'Welcome Vue Basic - example49 - Integracja z animate.css'
        ]);
    }

    public function example50Action()
    {
        return $this->render('VueBundle:VueBasic:example50.html.twig',[
            'title' => 'Welcome Vue Basic - example50 - Własny komponent animacji'
        ]);
    }

    public function example51Action()
    {
        return $this->render('VueBundle:VueBasic:example51.html.twig',[
            'title' => 'Welcome Vue Basic - example51 - Praca z narzędziem vue-cli'
        ]);
    }

    public function example52Action()
    {
        $vueHome = 
<<<EOF
import Vue from 'vue';
import VueRouter from 'vue-router';

import App from './App';
import '../css/home.scss';

new Vue({
    el: '#app',
    render: h => h(App)
});
EOF;
        $vueApp = 
<<<EOF
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
EOF;
        $vueCounter = 
<<<EOF
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
                this.&emit("progress", this.inProgress);
            },
            countdown: function() {

                this.counter--;

                if(this.counter > 0) {
                    setTimeout(this.countdown, 1000);
                } else {
                    setTimeout(() => {
                        this.counter = this.initValue;
                        this.inProgress = false;
                        this.&emit("progress", this.inProgress);
                    }, 1000);
                }

            }
        }
    };

</script>
EOF;

        return $this->render('VueBundle:VueBasic:example52.html.twig',[
            'title' => 'Welcome Vue Basic - example52 - Tworzenie własnego komponentu',
            'vueHome' => $vueHome,
            'vueApp' => $vueApp,
            'vueCounter' => $vueCounter
        ]);
    }

    public function example53Action()
    {
        return $this->render('VueBundle:VueBasic:example53.html.twig',[
            'title' => 'Welcome Vue Basic - example53 - Praca ze stylami CSS'
        ]);
    }

    public function example54Action()
    {
        $vueHome = 
<<<EOF
import Vue from 'vue';
import VueRouter from 'vue-router';

import App from './App';
import '../css/home.scss';

new Vue({
    el: '#app',
    render: h => h(App)
});
EOF;
        $vueApp = 
<<<EOF
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
EOF;
        $vueSlideshow = 
<<<EOF
<template>
    <div class="slides-wrapper">

        <button class="btn btn-primary btn-lg slides-prev" :disabled="start" @click="changeSlide(-1)">
            <i class="fa fa-angle-left"></i>
        </button>

        <div class="slides">
            <Slide :url="activeUrl" :number="number" />
        </div>

        <button class="btn btn-primary btn-lg slides-next" :disabled="end" @click="changeSlide(1)">
            <i class="fa fa-angle-right"></i>
        </button>

    </div>
</template>
<script>
    import Slide from "./Slide"

    export default {
        name: 'Slideshow',
        props: {
            images: Array
        },
        data() {
            return {
                active: 0
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
                return `&{this.active + 1}/&{this.images.length}`;
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
                    this.active = index;
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
EOF;
        $vueSlide = 
<<<EOF
<template>
    <figure>
        <img :src="url" alt="" class="img-fluid">
        <figcaption class="text-center text-muted">{{number}}</figcaption>
    </figure>
</template>
<script>
export default {
    name: "Slide",
    props: {
        url: String,
        number: String
    }
}
</script>
EOF;
        return $this->render('VueBundle:VueBasic:example54.html.twig',[
            'title' => 'Welcome Vue Basic - example54 - Tworzenie komponentów Slideshow',
            'vueHome' => $vueHome,
            'vueApp' => $vueApp,
            'vueSlideshow' => $vueSlideshow,
            'vueSlide' => $vueSlide,
        ]);
    }

    public function example55Action()
    {
        return $this->render('VueBundle:VueBasic:example55.html.twig',[
            'title' => 'Welcome Vue Basic - example55 - Dodanie preloadera obrazów'
        ]);
    }

}

