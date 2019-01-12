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