<script setup>
import {onMounted} from "vue";
import {useMyPostsById} from "../stores/myPostsStoreById";
const myPosts=useMyPostsById();
onMounted(() => {
    myPosts.loadPosts()
})
</script>

<template>
    <div v-if="myPosts.isPreload">
        Loading
    </div>
    <ul v-else>
        <li v-for="post in myPosts.posts" :key="post.id">
            <h2>{{ post.title }}</h2>
            <img :src="post.img_url" width="100">
            <p>{{ post.body }}</p>

        </li>
    </ul>
</template>

<style scoped>

</style>