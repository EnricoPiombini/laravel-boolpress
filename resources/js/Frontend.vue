<template>
    <div>
        <NavBar></NavBar>

        <div class="container">

            <router-view></router-view>


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