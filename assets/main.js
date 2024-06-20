new Vue({
    el: '#app',
    data: {
        dischi: [],
        selectedAlbum: null
    },
    created() {
        axios.get('data/dischi.json')
            .then(response => {
                this.dischi = response.data;
            })
            .catch(error => {
                console.error("C'è stato un errore nel caricamento dei dischi:", error);
            });
    },
    methods: {
        selectAlbum(disco) {
            this.selectedAlbum = disco;
        },
        closeModal() {
            this.selectedAlbum = null;
        }
    }
});
