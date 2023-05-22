import {defineStore} from "pinia";
import {toast} from "vue3-toastify";
import Mylog from "@/services/MyLog";
export const useHoroscopeApiStore=defineStore('horoscope',{
    state:() =>({
    data:{}
}),
    actions:{
    getHoroscope(){
        fetch('https://horostory.p.rapidapi.com/planetaryoverview', {
            method: 'GET',
            headers: {
                'X-RapidAPI-Key': '6477f38e19mshd867fef0575f52fp1c8d45jsnde3711c29dd0',
                'X-RapidAPI-Host': 'horostory.p.rapidapi.com'
            }
        })
            .then(res => res.text())
            .catch(error => {
                Mylog(error)
                toast.error(error.message)
            })
    }
    }
})

