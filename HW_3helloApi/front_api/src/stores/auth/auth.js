import {defineStore} from "pinia";
import {toast} from "vue3-toastify";
import MyLog from "@/services/MyLog";
import myAxios from "@/services/myAxios";

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
        myAxios('/api/auth/register/', {
            method: 'POST',
            headers: {
                "Content-Type": "application/json"
            },
            data: newUser
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