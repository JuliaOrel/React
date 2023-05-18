<script setup>
import { RouterLink, RouterView } from 'vue-router'
import HelloWorld from './components/HelloWorld.vue'
import MyFirstComponent from "@/components/first/MyFirstComponent.vue";
import MyHeader from "@/components/layouts/MyHeader.vue";
import MyFooter from "@/components/layouts/MyFooter.vue";
</script>

<template>

<MyHeader></MyHeader>
    <MyFirstComponent></MyFirstComponent>
<MyFooter></MyFooter>

</template>

<style scoped>

</style>
