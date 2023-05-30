<script setup>
import {useHoroscopeApiStore} from "@/stores/horoscope";
import {onMounted} from "vue";

const horoscopeStore=useHoroscopeApiStore()
onMounted(() =>{
horoscopeStore.getHoroscope()
})
</script>

<template>
    <div v-if="horoscopeStore.isPreload">
        Происходит загрузка данных

    </div>
    <div v-else-if="horoscopeStore.isError">
        Произошла ошибка при запросе данных {{horoscopeStore.error}}
    </div>
<h1 v-else>{{horoscopeStore.data.lagna}}</h1>

</template>

<style scoped>

</style>