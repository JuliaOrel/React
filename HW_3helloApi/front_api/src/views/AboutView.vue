<script setup>

import SiteBreadcrumbs from "@/layout/SiteBreadcrumbs.vue";
const pageTitle="About page"
</script>
<template>
    <SiteBreadcrumbs :pageTitle=pageTitle></SiteBreadcrumbs>
    <section class="inner-page">
        <div class="container">
            <h2>
                {{ pageTitle }}
            </h2>
        </div>
    </section>
</template>


