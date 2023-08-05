import {defineStore} from "pinia";
import myFetch from "@/helpers/myFetch";
import router from "@/router";
import myLog from "@/helpers/myLog";
import {toast} from "vue3-toastify";
import myLocalStorage from "../helpers/myLocalStorage";
import {ref} from "vue";



export const useAuthStore = defineStore('auth.store', {
    state: () => ({
        isPreload: false,
        isLogin: myLocalStorage.getItem('isLogin') || false,
        user: myLocalStorage.getItem('user') || null,
        token: myLocalStorage.getItem('token') ||null
    }), actions: {
        register(data) {
            this.isPreload = true;
            myFetch('/api/register', {
                method: 'POST', body: JSON.stringify(data),
                headers: {
                    "Content-Type": "application/json",
                    // 'Content-Type': 'application/x-www-form-urlencoded',
                },
            }).then(res => {
                this.isPreload = false
                if (res.success) {
                    this.user=res.user
                    this.isLogin=true
                    myLocalStorage.setItem('user', res.user)
                    myLocalStorage.setItem('isLogin', true)
                    router.push('/');
                    // this.token = res.authorization.token
                } else {
                    toast.error("Error")
                    if (res.errors) {
                        this.isPreload=false
                        myLog(res.errors)
                    }
                }

            })
                .catch(err => {
                    this.isPreload = false
                    toast.error("Error")
                    myLog(err)
                })

        },
        login(data) {
            this.isPreload = true;
            myFetch('/api/login', {
                method: 'POST',
                body: JSON.stringify(data),
                headers: {
                    "Content-Type": "application/json",
                },
            }).then(res => {
                this.isPreload = false
                if (res.success) {
                    console.log(res.authorization.token);
                    this.user = res.user;
                    this.token = res.authorization.token;
                } else {
                    toast.error("Error")
                    if (res.errors) {
                        myLog(res.errors)
                    }
                }
            }).catch(err => {
                this.isPreload = false
                toast.error("Error")
                myLog(err)
            })
        },
        logout() {
            // Здесь выполняется выход из системы
            // Сброс состояния
            this.isLogin= false;
            this.user = null;
            this.token = null;

            // Выполните дополнительные действия по выходу из системы, если нужно
            // Например, очистка данных в localStorage или другие действия

            // Пример очистки данных в localStorage
            myLocalStorage.removeItem('user');
            myLocalStorage.removeItem('isLogin');
            myLocalStorage.removeItem('token');

            // Пример перенаправления на страницу входа после выхода
            router.push('/login');
        }
    }
})
