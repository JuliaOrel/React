<script setup>
import {onMounted} from 'vue'
import UkraineAreas from "@/components/first/UkraineAreas.vue";
import PostItem from "@/components/posts/PostItem.vue";
import Areas from "@/components/novaPoshta/areas.vue";
onMounted(()=>{
    console.log('the component is mounted now')
})
</script>

<template>
<h3>My first component </h3>
  <areas></areas>
</template>

<style scoped>
h3 {color: #00B7FF}
</style>