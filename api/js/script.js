const app = new Vue ({
  el: "#root",
  data: {
    database: []
  },
  created() {
    axios
      .get("http://localhost/php-ajax-dischi/api/server.php")
      .then((resp) => {
        this.database = resp.data;
        console.log(resp.data);
      });
  },
});