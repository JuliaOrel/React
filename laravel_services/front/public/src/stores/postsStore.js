import {defineStore} from "pinia";


export const usePostStore=defineStore('usePosts', {
    state:() =>({
        isPreload: false, posts: []
    }), actions:{

    }
})