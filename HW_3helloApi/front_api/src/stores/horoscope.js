import {defineStore} from "pinia";
import {toast} from "vue3-toastify";
import Mylog from "@/services/MyLog";
export const useHoroscopeApiStore=defineStore('horoscope',{
    state:() =>({
    data:{}
}),
    actions:{
    getHoroscope(){
        fetch('https://astrologer.p.rapidapi.com/api/v3/now', {
            method: 'GET',
            headers: {
                'X-RapidAPI-Key': '6477f38e19mshd867fef0575f52fp1c8d45jsnde3711c29dd0',
                'X-RapidAPI-Host': 'astrologer.p.rapidapi.com'
            }
        })
            .then(res => res.json())
            .then(d=>(this.data=d, console.log(d)))
            .catch(error => {
                Mylog(error)
                toast.error(error.message)
            })
    }
    }
})

