<script setup>
import {onMounted} from "vue";
import {useSocketMainStore} from "@/stores/sockets/socket.main";
import MyHeader from "./components/MyHeader.vue";




onMounted( () => {
  const socketsMainStore = useSocketMainStore()
  socketsMainStore.connect()
})
</script>

<template>
    <MyHeader></MyHeader>
<main>
    <RouterView></RouterView>
  </main>
  <footer> &copy; ItStep 2023 </footer>

</template>


<style scoped>
</style>
