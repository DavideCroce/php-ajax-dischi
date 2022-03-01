console.log('VUE OK!', Vue);

Vue.config.devtools = true;

const songs = new Vue({
    el: '#root',
    data: {
        songs: [],
    },
    mounted: {
        axios.get("")
    }
})