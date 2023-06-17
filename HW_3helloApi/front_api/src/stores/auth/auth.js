import {defineStore} from "pinia";
import {toast} from "vue3-toastify";
import MyLog from "@/services/MyLog";
import myAxios from "@/services/myAxios";
import myLocalStorage from "@/services/myLocalStorage";

export const useAuthStore= defineStore('auth', {
    state: () =>({
    isPreload: false,
        isError: false,
        error: {},
        isLogin: myLocalStorage.getItem('isLogin') || null,
        user: myLocalStorage.getItem('user') || null,
        token: myLocalStorage.getItem('token') || null
    }),
    actions: {
    doRegister(newUser){
        this.isPreload=true
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
                this.isPreload=false
                this.user=res.user
                this.token=res.token
                this.isLogin=true
                myLocalStorage.setItem('user', res.user)
                myLocalStorage.setItem('token', res.token)
                myLocalStorage.setItem('isLogin', true)
                //res.redirect('/')
                //MyLog(res)
            }). catch(err => {
                MyLog(err)
            this.isPreload=false
            this.isError=true
            this.error=err
                toast.error(err.message)
        })
    }
    }
})