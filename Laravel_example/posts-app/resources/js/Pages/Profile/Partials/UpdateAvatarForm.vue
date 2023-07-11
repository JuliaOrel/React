<script setup>
import {usePage} from "@inertiajs/vue3";
import {ref} from "vue";

const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
const user=usePage().props.auth.user;

const newAvatarBody=ref(null);
console.log(newAvatarBody);
console.log(user.avatar);

const handleUploadAvatar = (event) =>{
    const file=event.target.files[0];
    const reader=new FileReader();

    reader.onLoad=(e) =>{
        newAvatarBody.value=e.target.result;
    }
    reader.readAsDataURL(file);
    console.log('Heelo');
}
</script>

<template>
    <form action="/profile/avatar" enctype="multipart/form-data" method="post">

        <input type="file" name="avatar" accept="image/*" @change="handleUploadAvatar">
        <input type="hidden" name="_token" v-model="csrfToken">
        <input type="submit">
    </form>

    <table>
        <tr>
            <td v-if="user.avatar">
                <h3>Old avatar</h3>
                <img :src="user.avatar" width="100"/>

            </td>
            <td v-if="newAvatarBody">
                <h3>New avatar</h3>
                <img :src="newAvatarBody" width="100"/>
            </td>
        </tr>
    </table>

</template>

<style scoped>

</style>
