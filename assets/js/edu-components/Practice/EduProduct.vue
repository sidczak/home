<template>
    <div class="product">
        <h3>Dane produktu</h3>
        <template v-if="true">
            <div class="product__info">
                <img class="product__image img-fluid" src="../../../static/laptop.jpg" alt="">
                <h1 class="product__name">{{ product.name }}</h1>
                <p class="product__desc">{{ product.description }}</p>
            </div>

            <div class="features">
                <h2 class="features__heading">Skonfiguruj urządzenie</h2>

                <div class="option">
                    <h3 class="option__label">Procesor</h3>

                    <div class="option__group">
                        <button class="btn btn-primary option__button">i7 2.5 GHz</button>
                        <button class="btn option__button" data-tooltip="+400 PLN">i7 2.8 GHz</button>
                        <button class="btn option__button" data-tooltip="+800 PLN">i7 3.2 GHz</button>
                    </div>
                </div>

                <div class="option">
                    <h3 class="option__label">Pamięć RAM</h3>

                    <div class="option__group">
                        <button class="btn btn-primary option__button">8GB RAM</button>
                        <button class="btn option__button">16GB RAM</button>
                    </div>
                </div>

                <div class="option">
                    <h3 class="option__label">Dysk twardy</h3>

                    <div class="option__group">
                        <button class="btn btn-primary option__button">128GB SSD</button>
                        <button class="btn option__button">256GB SSD</button>
                        <button class="btn option__button">512GB SSD</button>
                    </div>
                </div>
            </div>

            <div class="price float-right">
                <p class="price__label">Cena: </p>
                <p class="price__value">3999 PLN</p>
            </div>

            <div class="clearfix"></div>
            
            <div class="order">
                <button class="btn btn-lg btn-success float-right">Złóż zamówienie</button>
            </div>
        </template>
        <div class="toast toast-success" v-else>
            Twoje zamówienie zostało przyjęte. Dziękujemy!
        </div>
    </div>
</template>
<script>
    import {loading} from '../../mixins/mixins'
    export default {
        name: "EduProduct",
        mixins: [loading],
        data() {
            return {
                product: require("../../data/product")
            }
        },
        methods: {
            
        }
    }
</script>
<style lang="scss" scoped>

    .product {

        &__image {
            display: block;
            max-width: 50%;
            margin: 0 auto 50px auto;
        }
    }

    .features {
        margin-top: 70px;

        &__heading {
            margin-bottom: 50px;
        }
    }

        .option {
            padding: 30px;
            margin-bottom: 20px;
            border-radius: 10px;
            background-color: #f3f3f3;

            &:last-child {
                margin-bottom: 0;
            }

            &__label {
                margin-bottom: 30px;
            }

            &__button {
                min-width: 100px;
                margin-right: 20px;

                &:last-child {
                    margin-right: 0;
                }
            }
        }

    .price {
        margin-top: 50px;

        &__label {
            margin-bottom: 0;

            font-size: 20px;
        }

        &__value {
            margin-bottom: 0;

            font-size: 40px;
        }
    }

    .order {
        margin-top: 50px;
    }

</style>