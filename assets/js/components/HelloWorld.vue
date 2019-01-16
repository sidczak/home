<!-- <template>
    <div class="hello">
        <h2>{{ msg }}</h2>
    </div>
</template>
 -->
<script>
export default {
    name: 'HelloWorld',
    props: ["headingTag"],
    data () {
        return {
            msg: 'Welcome to Your Vue.js App'
        }
    },
    render: function(h) {
    	return h("div", [h(this.headingTag, this.msg), h("p", this.msg)]);
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
