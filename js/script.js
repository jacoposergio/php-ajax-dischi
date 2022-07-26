Vue.config.devtools = true

var app = new Vue(
    {
        el: '#root',
        data: {
            database:[]
        },
        mounted() {
            axios.get('http://localhost:8888/php-ajax-dischi/api.php')
            .then((response)=>{
                console.log("",response);
                // this.database = response.data;
            });
        }
    } 
);
