<script setup>

import FormRegister from "@/components/MyAuth/Forms/FormRegister.vue";
import SiteBreadcrumbs from "@/layout/SiteBreadcrumbs.vue";
import {useAuthStore} from "@/stores/auth/auth";
import {onMounted} from "vue";
import {useRouter} from "vue-router";
import {toast} from "vue3-toastify";
const router=useRouter();
const pageTitle="Page of registration"
const authStore=useAuthStore()
onMounted(() =>{
    if(authStore.isLogin) {
        toast.error("You are in the system")
        router.push('/');
    }
})
</script>

<template>
    <SiteBreadcrumbs :pageTitle=pageTitle></SiteBreadcrumbs>
    <section class="inner-page">
        <div class="container">
           <FormRegister></FormRegister>
        </div>
    </section>
</template>

<style scoped>

</style>