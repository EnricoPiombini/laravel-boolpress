<template>
    <div>
        <h1>Pagina Home</h1>

            <h2>Lista Post</h2>

            <Postlist></Postlist> 
    </div>
</template>

<script>
import Postlist from '../frontend/components/Postlist.vue';
export default{
    components: { Postlist }
}


</script>