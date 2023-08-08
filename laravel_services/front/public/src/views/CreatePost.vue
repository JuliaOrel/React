<script setup>

import myFetch from "@/helpers/myFetch";

import {useAuthStore} from "../stores/auth.store";

const authStore = useAuthStore();
const post = {
    title: "",
    img_url: null,
    body: "",
    author_id: authStore.user.id,
    slug: "",
};

async function addPost() {
    try {
        if (!post.slug) {
            console.error("Slug is required.");
            return;
        }

        const frmData = new FormData();
        frmData.append('post', post.title);
        frmData.append('post', post.img_url);
        frmData.append('post', post.body);
        frmData.append('post', post.author_id);
        frmData.append('post', post.slug);
        await myFetch('/api/user/posts', {
            method: 'POST',
            body: frmData,
        });

        console.log("Adding new post:", post);
    } catch (error) {
        console.error('Error:', error);
    }
}

function onFileChange(event) {
    post.img_url = event.target.files[0];
}
</script>

<template>
    <div>
        <h2>Add New Post</h2>
        <form @submit.prevent="addPost">
            <div>
                <label for="title">Title:</label>
                <input v-model="post.title" type="text" id="title" required />
            </div>
            <div>
                <div>
                    <label>Image</label>
                    <input type="file" @change="onFileChange" />
                </div>
            </div>
            <div>
                <label for="body">Text:</label>
                <textarea v-model="post.body" id="body" required></textarea>
            </div>
            <div>
                <label for="slug">Slug:</label>
                <input v-model="post.slug" type="text" id="slug" required />
            </div>
            <button type="submit">Add Post</button>
        </form>
    </div>
</template>






