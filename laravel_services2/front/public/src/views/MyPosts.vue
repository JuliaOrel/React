<script setup>
import {onMounted} from "vue";
import {useMyPostsById} from "../stores/myPostsStoreById";
const myPosts=useMyPostsById();

import {config} from "../../config";

console.log("image"+config.IMAGE_SERVER_BASE_URL);
onMounted(() => {
    myPosts.loadPosts()
})
</script>

<template>
    <div v-if="myPosts.isPreload">
        Loading
        <h1>{{config.IMAGE_SERVER_BASE_URL}}</h1>
    </div>
    <ul v-else>
        <li v-for="post in myPosts.posts" :key="post.id">
            <h2>{{ post.title }}</h2>
            <img :src="`${config.IMAGE_SERVER_BASE_URL}/${post.img_url}`" width="100">
            <p>{{ post.body }}</p>

        </li>
    </ul>
</template>

<style scoped>

</style>