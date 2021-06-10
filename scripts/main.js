const app = new Vue({

  el: '#app',
  data:{

    albums:[],
    genres:[],
    genreToSearch: 'all',
    apiURL: 'http://localhost:8888/dischi-php-ajax/api.php'

  },
  methods:{

    getAPI(){
      axios.get(this.apiURL,{
        params:{
          genre: this.genreToSearch
        }
      })
      .then(res => {

        this.albums = res.data.albums;
        this.genres = res.data.genres;
        console.log(this.genres);

      }).catch(err => {

        console.log(err);

      })
    }

  },
  created(){
    this.getAPI();
  }

});