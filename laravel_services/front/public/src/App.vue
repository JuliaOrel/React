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
    <aside class="main-sidebar">  main-main-sidebar
        <nav>
            <ul>
                <li><RouterLink to="/">Главная</RouterLink></li>
                <li><RouterLink to="/about">About</RouterLink></li>
            </ul>


        </nav>
    </aside>
    <RouterView></RouterView>
  </main>
  <footer> &copy; ItStep 2023 </footer>

</template>


<style scoped>
</style>
