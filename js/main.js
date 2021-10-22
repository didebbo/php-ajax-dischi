const app = new Vue({
    el: "#App",
    data: {
        logoSrc: "spotify-logo.png",
        genre: "all",
        database: {
            tracks: {},
            genres: [],
        }
    },
    created() {
        this.getGenres();
        this.getTracks(this.genre);
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
        },
        getGenres() {
            axios.get("http://localhost/php-ajax-dischi/apis/genres.php")
                .then((res) => {
                    this.database.genres = res.data;
                });
        },
        onGenderFilterChanged(genre) {
            this.getTracks(genre);
        }
    }
});