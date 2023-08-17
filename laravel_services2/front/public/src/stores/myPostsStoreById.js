import {defineStore} from "pinia";
import myFetch from "@/helpers/myFetch";
import myLog from "@/helpers/myLog";
import {toast} from "vue3-toastify";

export const useMyPostsById = defineStore('myPost', {
    state: () => ({
        isPreload: false, posts: []
    }), actions: {
        loadPosts() {
            this.isPreload = true
            myFetch(`/api/user/posts`)
                .then(res => {
                    this.posts = res.data
                    console.log(res.data)
                    this.isPreload = false
                    // console.log(res)
                })
                .catch(err=> {
                    myLog(err)
                    toast.error(err)
                })
        }
    }
})