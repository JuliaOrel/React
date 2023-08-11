<script setup>
import {useReadPostsStore} from "../../stores/readPostsStore";
import {useAuthStore} from "../../stores/auth.store";
import {onMounted} from "vue";

const readPostStore = useReadPostsStore()
const authStore = useAuthStore();
onMounted(() => {
    readPostStore.loadPosts()
})
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
        <button v-if="authStore.isLogin" type="button" class="btn btn-secondary">
            <RouterLink :to="{ name: 'posts.users', params: { userId: authStore.user.id } }">My recipes</RouterLink>
        </button>
    </div>

</template>

<style scoped>

</style>