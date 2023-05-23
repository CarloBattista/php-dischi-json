const { createApp } = Vue

createApp({
    data() {
        return {
            message: 'Hello Vue!',
            api: './_assets/php/server.php', // Path server api
            data: '', 
        }
    },
    methods: {
        apiCall() {
            axios.get(this.api)
                .then((res) => {
                    this.data = res.data;
                    console.log(res.data)
                });
        },
    },
    mounted() {
        this.apiCall(); // Chiamo la funzione axios
    }
}).mount('#app')