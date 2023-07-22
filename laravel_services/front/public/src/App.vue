<script setup>
import {onMounted} from "vue";
import {useSocketMainStore} from "@/stores/sockets/socket.main";




onMounted( () => {
  const socketsMainStore = useSocketMainStore()
  socketsMainStore.connect()
})
</script>

<template>
  <header> Public 1 </header>
<main>
    <RouterView></RouterView>
  </main>
  <footer> &copy; ItStep 2023 </footer>

</template>


<style scoped>
</style>
