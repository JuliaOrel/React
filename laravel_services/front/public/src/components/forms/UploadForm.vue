<template>
    <div>
        <label>Image</label>
        <input type="file" @change="onFileChange" />
<!--        <button @click="uploadImage">Upload</button>-->
    </div>
</template>

<script>
import myFetch from "@/helpers/myFetch";

export default {
    data() {
        return {
            file: null,
        };
    },
    methods: {
        onFileChange(event) {
            this.file = event.target.files[0];
        },
        // uploadImage() {
        //     let formData = new FormData();
        //     formData.append("image", formData);
        //     myFetch('/api/user/upload', {
        //         method: 'POST',
        //         body: JSON.stringify(this.file),
        //         headers: {
        //             "Content-Type": "application/json",
        //         }
        //     })



            // Выполняем POST-запрос на бэкенд для загрузки изображения и получения ссылки на него
            // Здесь предполагается, что у вас есть функция отправки данных на сервер, например, используя Axios.
            // Убедитесь, что ваш URL и метод запроса соответствуют вашему бэкенду.
            // Пример запроса:
            // axios.post('/api/upload', formData)
            //   .then(response => {
            //     // обработка успешного ответа
            //   })
            //   .catch(error => {
            //     // обработка ошибки
            //   });
        },
    },
};
</script>