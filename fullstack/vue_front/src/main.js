import './assets/vendor/bootstrap/css/bootstrap.min.css'
import './assets/vendor/bootstrap-icons/bootstrap-icons.css'
import './assets/vendor/aos/aos.css'
import './assets/vendor/glightbox/css/glightbox.min.css'
import './assets/vendor/swiper/swiper-bundle.min.css'

import './assets/css/variables.css'

//Главная стилистика
import './assets/css/main.css'

import './assets/vendor/bootstrap/js/bootstrap.bundle.min.js'

import './assets/vendor/glightbox/js/glightbox.min.js'
import './assets/vendor/isotope-layout/isotope.pkgd.min.js'
import './assets/vendor/swiper/swiper-bundle.min.js'
import './assets/vendor/php-email-form/validate.js'

import 'vue3-toastify/dist/index.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'

const app = createApp(App)

app.use(createPinia())
app.use(router)

app.mount('#app')
