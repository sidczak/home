<template>
	<div class="product-info">
		<h3>Dane produktu</h3>
		<template v-if="product">
			<p>Nazwa produktu: {{product.name}}</p>
			<p>Cena: {{product.price}} PLN</p>
		</template>
		<button class="btn btn-primary" :class="{'loading': loading}" :disabled="loading" @click="getData">Wyświetl dane</button>
	</div>
	
</template>
<script>
	import {loading} from '../mixins/mixins'
	export default {
		name: "EduProduct",
		mixins: [loading],
		data() {
			return {
				product: null
			}
		},
        methods: {
            getData() {
                this.toggleLoading();
                setTimeout(() => {
                    this.product = {
                        name: "Żelazko z funkcją pary",
                        price: 210
                    };
                    this.toggleLoading();
                },1000);
            }
        }
	}
	
</script>