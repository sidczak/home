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
<style lang="scss" scoped>
	figure.figure {
		transition: opacity 0.2s ease-in;
	}
	.dimmed {
		opacity: 0.5;
	}
</style>