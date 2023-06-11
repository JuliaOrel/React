import {defineStore} from "pinia";
import {toast} from "vue3-toastify";
import MyFetch from "@/services/myFetch";
import MyLog from "@/services/MyLog";
import myLocalStorage from "@/services/myLocalStorage";
import {useRouter} from "vue-router";
//const router=useRouter();

export const useAuthStore = defineStore('auth', {
    state: ()=>({
    isPreload: false,
        isError: false,
        error: {},
        isLogin: myLocalStorage.getItem('isLogin') || null,
        user: myLocalStorage.getItem('user') || null,
        token: myLocalStorage.getItem('token') ||null
    }),
    actions:{
        doRegister(newUser){

        this.isPreload=true
            //console.log(newUser)
            MyFetch('/api/auth/register/', {
                method: 'POST',
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(newUser)
            })
                .then(res => {
                    this.isPreload=false
                    this.user=res.user
                    this.token=res.token
                    this.isLogin=true
                    myLocalStorage.setItem('user', res.user)
                    myLocalStorage.setItem('token', res.token)
                    myLocalStorage.setItem('isLogin', true)
                    //useRouter.push('/')
                    //MyLog(res)
                })
                .catch(err => {
                    MyLog(err)
                    this.isPreload=false
                    this.isError=true
                    this.err=err
                    toast.error(err.message)
                })
        }
    }
})