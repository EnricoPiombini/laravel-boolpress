<template>
    <div>
        <NavBar></NavBar>

        <div class="container">

            <h1>Hello {{  message  }}</h1>

            <h2>Lista Post</h2>

            <Postlist></Postlist>

        </div>
    </div>
</template>
  
  <script>
  import NavBar from './frontend/components/NavBar.vue';
  import Postlist from './frontend/components/Postlist.vue';
  
  export default {
      components: { NavBar, Postlist },
      data() {
          return {
              message: "Vue.js"
          };
      },
  }
  </script>