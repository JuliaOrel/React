import {defineStore} from "pinia";
import {toast} from "vue3-toastify";
import MyAxios from "@/services/myAxios";
import MyLog from "@/services/MyLog";

export const useAuthStore= defineStore('auth', {
    state: () =>({
    isPreload: false,
        isError: false,
        error: {},
        isLogin: false
    }),
    actions: {
    doRegister(newUser){
        // toast.info(newUser.name)
        // console.log(newUser.name)
        MyAxios('/api/auth/register', {
            method: 'POST',
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(newUser)
        })
            .then(res=> {
                MyLog(res)
            }). catch(err => {
                MyLog(err)
                toast.error(err.message)
        })
    }
    }
})