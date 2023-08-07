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
                    <!--        <button @click="uploadImage">Upload</button>-->
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

<script>

import myFetch from "@/helpers/myFetch";

import {useAuthStore} from "../stores/auth.store";

const authStore = useAuthStore();
export default {

    data() {
        return {
            post: {
                title: "",
                img_url: null,
                body: "",
                author_id: authStore.user.id,
                slug: ""
            },
        };
    },
    methods: {
        async addPost() {
            try {
                // if (this.post.id !== undefined) {
                //     await axios.put(`/api/posts/${this.post.id}`, this.post);
                // } else {
                    myFetch('/api/user/posts', {
                        method: 'POST',
                        body: JSON.stringify(this.post),
                        headers: {
                            "Content-Type": "application/json",
                        }
                    }),
                //}
                console.log("Adding new post:", this.post);
            } catch (error) {
                console.error('Error:', error);
            }
        },
        onFileChange(event) {
            this.post.img_url = event.target.files[0];
        },
    },
};
</script>





