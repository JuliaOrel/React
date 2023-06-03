<script setup>
import FormRegister from "@/components/Forms/FormRegister.vue";

const pageTitle="Registration page"
import SiteBreadcrumbs from "@/layout/SiteBreadcrumbs.vue";
import {useAuthStore} from "@/stores/auth/auth";
import {onMounted} from "vue";
import {toast} from "vue3-toastify";
const authStore=useAuthStore()

onMounted(()=>{
    if(authStore.isLogin){
        toast.error("U are in the sys")
        this.router.push('/')
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