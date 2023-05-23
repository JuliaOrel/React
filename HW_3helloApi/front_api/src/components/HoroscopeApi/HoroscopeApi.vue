<script setup>
import {useHoroscopeApiStore} from "@/stores/horoscope";
import {onMounted} from "vue";

const horoscopeStore=useHoroscopeApiStore()
onMounted(() =>{
horoscopeStore.getHoroscope()
})
</script>

<template>
<h1>{{horoscopeStore.data}}</h1>

</template>

<style scoped>

</style>