<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vue Dischi</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- style -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- Axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- VueJs -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>
<body>
  <!-- header -->
  <header>
    <a href="https://www.spotify.com/">
      <img src="../img/spotify-download-logo-30.png" alt="Spotify logo" />
    </a>
  </header>
  
  <!-- main -->
  <main id="root">
    <div class="container">

      <!-- filtro per genere -->
      <section class="row row-cols-1">
        <label class="p-3 text-center" for="filter-search">
          Filtra per genere musicale
          <select @change="">
            <option value="" selected>Tutti</option>
            <option>
            </option>
          </select>
        </label>
      </section>

      <!-- corpo centrale -->
      <section class="row row-cols-3 row-cols-lg-6 mt-4">
        <!-- ciclo v-for per chiamata axios -->
        <div 
          v-for="element in database" 
          class="my-card text-center p-3 mb-3 mx-3">
          <img :src="element.poster" :alt="element.title" />
          <h2 class="p-3">{{ element.title }}</h2>
          <h3>{{ element.author }}</h3>
          <h3>{{ element.year }}</h3>
        </div> 
                
      </section>
    </div>    
  </main>
  <script src="./js/script.js"></script>
</body>
</html>