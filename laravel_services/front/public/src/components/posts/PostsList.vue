<script setup>
import {useReadPostsStore} from "../../stores/readPostsStore";
import {onMounted} from "vue";

const readPostStore=useReadPostsStore()
onMounted( ()=>{
    readPostStore.loadPosts()
})
</script>

<template>
    <div v-if="readPostStore.isPreload">
        Loading
    </div>
<ul v-else>
<li v-for="post in readPostStore.posts" :key="post.id">
    {{post.title}}
</li>
</ul>
</template>

<style scoped>

</style>