<script setup>
import {onMounted} from "vue";
import {toast} from "vue3-toastify";
import HoroscopeApi from "@/components/HoroscopeApi/HoroscopeApi.vue";


onMounted(() =>{
    toast.info("Open Home Page")
})
</script>

<template>
  <main>
<HoroscopeApi></HoroscopeApi>
  </main>
</template>
