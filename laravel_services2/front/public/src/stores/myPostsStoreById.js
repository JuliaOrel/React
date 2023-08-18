import {defineStore} from "pinia";
import myFetch from "../helpers/myFetch";
import myLog from "../helpers/myLog";
import {toast} from "vue3-toastify";
import myLocalStorage from "../helpers/myLocalStorage";

export const useMyPostsById = defineStore('myPost', {
    state: () => ({
        isPreload: false, posts: []
    }), actions: {
        loadPosts() {
            this.isPreload = true
            console.log(myLocalStorage.getItem('token'))
            myFetch(`/api/user/posts`, {
                // headers:{
                //     'Authorization':`Bearer ${myLocalStorage.getItem('token')}`
                // }
            })
                .then(res => {
                    this.posts = res.data
                    console.log(res.data)
                    this.isPreload = false
                    //console.log(res)
                })
                .catch(err=> {
                    myLog(err)
                    toast.error(err)
                })
        }
    }
})