import {defineStore} from "pinia";

export const useAuthStore = defineStore('auth', {
    state: ()=>({
    isPreload: false,
        isError: false,
        error: {},
        isLogin: false
    }),
    actions:{

    }
})