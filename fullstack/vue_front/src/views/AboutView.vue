<script setup>
import SiteBreadcrumbs from "@/layout/SiteBreadcrumbs.vue";
const pageTitle="About Page"
</script>
<template>
    <SiteBreadcrumbs :pageTitle=pageTitle></SiteBreadcrumbs>
    <section class="inner-page">
        <div class="container">

            <div class="section-header">
                <h2>{{ pageTitle }}</h2>
            </div>

            <p>
                Text about
            </p>

        </div>
    </section><!-- End Inner Page -->
</template>

<style>

</style>
