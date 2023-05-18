<script setup>
import {onMounted} from 'vue'
onMounted(()=>{
    const url='https://yahoo-weather5.p.rapidapi.com/weather?location=Mykolaiv&format=json&u=f';
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': '7e2afce0b1msh7f5c23d92a82e63p15d2e7jsn1fb4d1a13ff8',
            'X-RapidAPI-Host': 'yahoo-weather5.p.rapidapi.com'
        }
    };
    try {
        const response = fetch(url, options);
        const result = response.text();
        console.log(result);
    } catch (error) {
        console.error(error);
    }
})
</script>

<template>

</template>

<style scoped>

</style>