const app = new Vue({
    el: '#app',

    data: {
        disks: null
    },

    mounted() {
        axios
            .get('./api/db.php')
            .then(response => {
                console.log(response);
                this.disks = response.data
            }).catch(error => {
                console.log(error)
            })
    }
})