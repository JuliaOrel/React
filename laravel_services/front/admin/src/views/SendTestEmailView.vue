<template>
    <div>
        <button @click="sendMail">Отправить письмо</button>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';

function sendMail() {
    // Выполните здесь логику отправки письма через AJAX или axios.post
    // Здесь приведен пример с использованием Axios и предполагается, что у вас настроен маршрут '/send-mail' на сервере

    axios.post('/api/send-mail')
        .then(response => {
            console.log(response.data.message);
        })
        .catch(error => {
            console.error(error);
        });
}
</script>