import {toast} from "vue3-toastify";
import myLog from "@/services/MyLog";
import axios from "axios";

export default function (url, options = {}) {


    return new Promise((resolve, reject) => {

        axios.request(options)
            .then(res => {
                // Если я получил статус 200 (все ок)
                if (res.status === 200) {
                    try {
                        return res.data
                    } catch (e) {
                        reject({message: 'Error Json in Axios'})
                    }
                }

                // И тут я могу реагировать на нее
                if (res.status === 404) {
                    toast.error("404")
                    reject({message: '404 - Not Found in BackEnd'})
                }
            })
            .then(data => {
                toast.success(" axios Ok")
                resolve(data)
            })
            .catch(error => {
                myLog(error)
                toast.error(error.message)
                reject(error)
            })

    })
}