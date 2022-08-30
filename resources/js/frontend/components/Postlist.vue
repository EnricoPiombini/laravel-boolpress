<template>
    <div class="row row-cols-2">
        <div class="col" v-for="post in posts" :key="post.id">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{post.title}}</h5>
                    <p class="card-text" v-html="post.content"></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            posts: []
        }
    },
    methods:{
        fetchPost(){
            axios.get("/api/posts")
            .then((resp)=>{
              this.posts = resp.data
            })
        }
    },
    mounted(){
        this.fetchPost();
    }
}
</script>