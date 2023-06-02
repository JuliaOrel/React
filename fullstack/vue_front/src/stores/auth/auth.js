import {defineStore} from "pinia";
import {toast} from "vue3-toastify";

export const useAuthStore = defineStore('auth', {
    state: ()=>({
    isPreload: false,
        isError: false,
        error: {},
        isLogin: false
    }),
    actions:{
        doRegister(newUser){
        toast.info(newUser.name)
            console.log(newUser)
        }
    }
})