<script setup>
import { RouterLink, RouterView } from 'vue-router'
import SiteHeader from "@/layout/SiteHeader.vue";
import SiteFooter from "@/layout/SiteFooter.vue";

</script>

<template>
<SiteHeader></SiteHeader>
    <main id="main">
        <RouterView/>
    </main>
<SiteFooter></SiteFooter>
</template>

<style scoped>

</style>
