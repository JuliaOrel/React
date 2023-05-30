import {defineStore} from "pinia";
import {toast} from "vue3-toastify";
import Mylog from "@/services/MyLog";
import axios from 'axios';
import myLocalStorage from "@/services/myLocalStorage";
import myAxios from "@/services/myAxios";

export const useHoroscopeApiStore= defineStore('horoscope',{
    state:() =>({
        isPreload: false,
        isError: false,
        error: {},
        whenLoad: myLocalStorage.getItem('HoroscopeApiStoreWhen')|| null,
    data: myLocalStorage.getItem('HoroscopeApiStoreData')|| {}
}),
    actions:{
    async getHoroscope() {
        let d=this.whenLoad
        if(d===null) {
            this.isPreload=true
            const options = {
                method: 'GET',
                url: '/api/horoscope',
            };

            try {
                const response = await myAxios.request(options);
                console.log(response.data);
                this.data = response.data;
                myLocalStorage.setItem('HoroscopeApiStoreData', response.data);
                this.whenLoad = new Date().toLocaleString();
                myLocalStorage.setItem('HoroscopeApiStoreWhen', this.whenLoad);
                this.isPreload=false

            } catch (error) {
                console.error(error);
                this.isError=true
                this.error=error
                Mylog(error);
            }
        }
    }
    }
})

