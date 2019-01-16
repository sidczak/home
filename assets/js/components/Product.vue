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
	export default {
		name: "Product",
		data() {
			return {
				product: null,
				loading: false
			}
		},
        methods: {
            getData() {
                this.loading = true;
                setTimeout(() => {
                    this.product = {
                        name: "Żelazko z funkcją pary",
                        price: 210
                    };
                    this.loading = false;
                },1000);
            }
        }
	}
	
</script>