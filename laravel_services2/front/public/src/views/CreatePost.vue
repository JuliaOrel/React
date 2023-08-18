<script setup>


import {useAuthStore} from "../stores/auth.store";
import myLocalStorage from "../helpers/myLocalStorage";

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
        frmData.append('title', post.title);
        // frmData.append('img_url', post.img_url, post.img_url.name);
        frmData.append('img_url', document.getElementById('img_url').files[0]);
        frmData.append('body', post.body);
        frmData.append('author_id', post.author_id);
        frmData.append('slug', post.slug);

         fetch('/api/user/posts', {
             method: 'POST',
             body: frmData,

             headers: {
                 'Authorization':`Bearer ${myLocalStorage.getItem('token')}`
             }
        })
            .then(res => {
                console.log(res)
                return res.text()
            }).
         then( txt => {
             console.log(txt)
         });

        console.log("Adding new post:", post);
    } catch (error) {
        console.error('Error:', error);
    }
}

const onFileChange = (event) => {
    post.img_url = event.target.files[0];
    console.log('file change');
    console.log(post.img_url)
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
                    <input type="file" @change="onFileChange" id="img_url"/>
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






