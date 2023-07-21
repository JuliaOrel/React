<script setup>
import {onMounted} from "vue";
import {useSocketMainStore} from "@/stores/sockets/socket.main";
import RegisterForm from "@/components/forms/auth/RegisterForm.vue";
import Socket from './views/Socket.vue';



onMounted( () => {
  const socketsMainStore = useSocketMainStore()
  socketsMainStore.connect()
})
</script>

<template>
  <header> Public 1 </header>
<main>
      <Socket></Socket>
  </main>
  <footer> &copy; ItStep 2023 </footer>

</template>


<style scoped>
</style>
