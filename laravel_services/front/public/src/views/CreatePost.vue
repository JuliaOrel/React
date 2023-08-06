<template>
    <div>
        <h2>Add New Post</h2>
        <form @submit.prevent="addPost">
            <div>
                <label for="title">Title:</label>
                <input v-model="post.title" type="text" id="title" required />
            </div>
            <div>
                <UploadForm></UploadForm>

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
import UploadForm from "@/components/forms/UploadForm.vue";


const authStore = useAuthStore();
export default {
    components: {UploadForm},
    data() {
        return {
            post: {
                title: "",
                image_url: "",
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
    },
};
</script>





