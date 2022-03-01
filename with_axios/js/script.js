console.log('VUE OK!', Vue);

Vue.config.devtools = true;

const songs = new Vue({
    el: '#root',
    data: {
        songs: [],
    },
    mounted() {
        axios.get('http://localhost/php-ajax-dischi/with_axios/api/songs.php').then((res) => {
            this.songs = res.data;
        });
    }
})
