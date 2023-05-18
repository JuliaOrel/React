<script setup>
import {onMounted} from 'vue'
import UkraineAreas from "@/components/first/UkraineAreas.vue";
import PostItem from "@/components/posts/PostItem.vue";
onMounted(()=>{
    console.log('the component is mounted now')
})
</script>

<template>
<h3>My first component </h3>
  <UkraineAreas></UkraineAreas>
  <PostItem></PostItem>
</template>

<style scoped>
h3 {color: #00B7FF}
</style>