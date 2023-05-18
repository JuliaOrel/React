<script setup>
import {onMounted} from 'vue'
import MykolaivWeather from "@/components/first/MykolaivWeather.vue";
onMounted(()=>{
    fetch('https://api.novaposhta.ua/v2.0/json/Address/getAreas', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            "modelName": "Address",
            "calledMethod": "getAreas",
            "methodProperties":{}
        }),
    })
        .then(response => response.json())
        .then(data => {
           console.log(data);
    })
        .catch(error => {
            console.error("Error", error);
        });
})
</script>

<template>
<MykolaivWeather></MykolaivWeather>
</template>

<style scoped>

</style>