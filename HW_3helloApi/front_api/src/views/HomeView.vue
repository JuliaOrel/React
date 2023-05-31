<script setup>
import {onMounted} from "vue";
import {toast} from "vue3-toastify";
import HoroscopeApi from "@/components/HoroscopeApi/HoroscopeApi.vue";


onMounted(() =>{
    toast.info("Open Home Page")
})
</script>

<template>
    <section class="inner-page">
        <div class="container">
            <h2>
                Home page
            </h2>
            <HoroscopeApi></HoroscopeApi>
        </div>
    </section>
</template>
