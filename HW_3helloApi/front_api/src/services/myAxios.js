import {toast} from "vue3-toastify";
import myLog from "@/services/MyLog";
import axios from "axios";

export default function (url, options = {}) {


    return new Promise((resolve, reject) => {
        axios(url,options)
            .then(res => {
                // Если я получил статус 200 (все ок)
                if (res.status === 200 || res.status === 201) {
                    try {
                        console.log(res.data);
                        resolve(res.data);
                    } catch (e) {
                        reject({ message: 'Error parsing JSON in Axios' });
                    }
                } else if (res.status === 404) {
                    toast.error("404");
                    reject({ message: '404 - Not Found in BackEnd' });
                }
            })
            .then(data => {
                toast.success("axios Ok");
                resolve(data);
            })
            .catch(error => {
                myLog(error);
                toast.error(error.message + " Hello");
                reject(error);
            });
    });
}