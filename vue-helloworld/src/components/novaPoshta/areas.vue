<script setup>
import {onMounted, ref} from 'vue'
const regions=ref ([])
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
        .then(response_body => {
            console.log(response_body.data);
            regions.value=response_body.data;
        })
        .catch(error => {
            console.error("Error", error);
        });
})
</script>

<template>
<h1>There are some post departments</h1>
    <div>
<label for="region">Region:</label>
        <select id="region" v-model="selectedRegion">
            <option value="">Choose the region</option>
            <option v-for="region in regions" :value="region">{{region.Description}}</option>

        </select>
    </div>

</template>

<style scoped>

</style>