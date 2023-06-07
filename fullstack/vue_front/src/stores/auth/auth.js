import {defineStore} from "pinia";
import {toast} from "vue3-toastify";
import MyFetch from "@/services/myFetch";

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
            MyFetch('/api/auth/register/', {
                method: 'POST',
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(newUser)
            })
                .then(res => {
                    console.log(res)
                })
                .catch(err => {
                    toast.error(err.message)
                })
        }
    }
})