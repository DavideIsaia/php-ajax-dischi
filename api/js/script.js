const app = new Vue ({
  el: "#root",
  data: {
    database: [],
    genre: '',
    // aggiungo la ricerca del genere all'url della chiamata axios
    url: 'http://localhost/php-ajax-dischi/api/server.php?genre=',
  },
  mounted() {
    this.getAPI();
  },
  methods: {
    getAPI() {
      axios
      .get(this.url + this.genre)
      .then((resp) => {
        this.database = resp.data;
        // console.log(resp.data);
      });
    }
  },
});