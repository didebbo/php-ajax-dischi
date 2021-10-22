const app = new Vue({
    el: "#App",
    data: {
        logoSrc: "spotify-logo.png",
        database: {
            tracks: {},
            genres: [],
        }
    },
    created() {
        this.getTracks("all");
    },
    methods: {
        getTracks(genre) {
            axios.get("http://localhost/php-ajax-dischi/apis/tracks.php", {
                params: {
                    genre: genre,
                }
            }).then((res) => {
                this.database.tracks = res.data;
            });
        }
    }
});