<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id="app">
        <h1>Lista Dischi</h1>
        <div class="albums">
            <div v-for="disco in dischi" :key="disco.titolo" class="album" @click="selectAlbum(disco)">
                <img :src="disco.copertina" :alt="disco.titolo">
                <div>
                    <h2>{{ disco.titolo }}</h2>
                    <p>{{ disco.artista }}</p>
                    <p>{{ disco.anno }}</p>
                    <p>{{ disco.genere }}</p>
                </div>
            </div>
        </div>

        <!-- Finestra Modale -->
        <div v-if="selectedAlbum" class="modal" @click.self="closeModal">
            <div class="modal-content">
                <span class="close" @click="closeModal">&times;</span>
                <h2>{{ selectedAlbum.titolo }}</h2>
                <img :src="selectedAlbum.copertina" :alt="selectedAlbum.titolo">
                <p><strong>Artista:</strong> {{ selectedAlbum.artista }}</p>
                <p><strong>Anno:</strong> {{ selectedAlbum.anno }}</p>
                <p><strong>Genere:</strong> {{ selectedAlbum.genere }}</p>
            </div>
        </div>
    </div>
    <script src="assets/main.js"></script>
</body>
</html>
