<template>
    <div>
        <h1>PostLists # {{  post.id  }}</h1>

        <h2>{{  post.title  }}</h2>
        <h2>{{  post.content  }}</h2>



    </div>
</template>
  
  <script>
  import axios from 'axios';
  export default {
      data() {
          return {
              post: {}
          }
      },
      mounted() {
          // console.log(this.$route)
          axios.get("/api/posts/" + this.$route.params.slug)
              .then((resp) => {
                  const data = resp.data
                  this.post = data;
              })
      }
  }
  </script>