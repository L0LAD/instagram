<template>
    <div>
        <button class="btn btn-primary m-3" @click="followUser">Follow</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        methods: {
          followUser() {
            axios.post('/follow/1')
              .then(response => {
                alert(response.data);
              })
          }
        }
    }
</script>
