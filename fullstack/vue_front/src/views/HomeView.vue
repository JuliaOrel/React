<script setup>
import {onMounted} from "vue";
import {toast} from "vue3-toastify";
import ListArea from "@/components/NovaPoshta/Areas/ListArea.vue";
import PrivatBankExchange from "@/components/PrivatBank/PrivatBankExchange.vue";
import ExhangeApiList from "@/components/ExchangeApi/ExhangeApiList.vue";

onMounted(()=>{
    toast.info("Open Home Page")
})

</script>

<template>
  <main>
      <ExhangeApiList></ExhangeApiList>
  </main>
</template>
