<script setup>
import {useReadPostsStore} from "../../stores/readPostsStore";
import {useAuthStore} from "../../stores/auth.store";
import {onMounted} from "vue";
import myFetch from "@/helpers/myFetch";
import {useMyPostsById} from "@/stores/myPostsStoreById";

const readPostStore = useReadPostsStore()
const authStore = useAuthStore();
const myPosts=useMyPostsById();
onMounted(() => {
    readPostStore.loadPosts()
})

const fetchUserPosts =() => {
    myPosts.loadPosts(authStore.user.id);
};
</script>

<template>
    <div v-if="readPostStore.isPreload">
        Loading
    </div>
    <ul v-else>
        <li v-for="post in readPostStore.posts" :key="post.id">
            <h2>{{ post.title }}</h2>
            <img :src="post.img_url" width="100">
            <p>{{ post.body }}</p>

        </li>
    </ul>
    <div>
        <button v-if="authStore.isLogin" type="button" class="btn btn-secondary"><RouterLink to="/createposts">Add Recipe</RouterLink></button>
        <div v-if="authStore.isLogin">
            <button class="btn btn-secondary" @click="fetchUserPosts">Загрузить мои посты</button>

        </div>

    </div>

</template>

<style scoped>

</style>