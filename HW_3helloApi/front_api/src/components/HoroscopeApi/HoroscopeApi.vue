<script setup>
import {useHoroscopeApiStore} from "@/stores/horoscope";
import {onMounted} from "vue";

const horoscopeStore=useHoroscopeApiStore()
onMounted(() =>{
horoscopeStore.getHoroscope()
})
</script>

<template>
<h1>{{horoscopeStore.data.description}}</h1>
    <p>{{horoscopeStore.data.planet}}</p>
    <p>{{horoscopeStore.data.sign}}</p>
</template>

<style scoped>

</style>