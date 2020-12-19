<template>
            <div class="col-md-8">
                <h1>This is header!</h1>
            </div>
</template>

<script>
export default {
    props: {
        categories: {},
        tasks     : {},
    },
    // methods: {
    //     getTasks() {
    //         var id = 1;
    //         axios
    //             .get('/api/tasks/' + id)
    //             .then(response => {
    //                 console.log(response.data);
    //                 this.categories = response.data;
    //             })
    //             .catch(err => {
    //                 this.message = err;
    //             });
    //     },
    // }
    mounted() {
            console.log('Component mounted.')
        },
}
</script>