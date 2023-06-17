<script setup>
import {toast} from "vue3-toastify";
import {useAuthStore} from "@/stores/auth/auth";
import {onMounted, ref} from "vue";
import {useRouter} from "vue-router";

const authStore=useAuthStore()
const router=useRouter()

onMounted(()=>{
    if(authStore.isLogin){
        toast.error("U are in the sys")
        //this.router.push('/')
    }
})

const user = ref({
    name: '', email: '', password: '', confirmPassword: ''
})

const sendToBack = ()=>{
    authStore.doRegister(user.value)
    return false;
}
</script>

<template>
<h2>Registration form</h2>
    <div v-if="authStore.isPreload" class="preload">
        <div class="spinner-border" role="status">
            <span class="sr-only"></span>
        </div>
    </div>
    <div v-else-if="authStore.isError">
        <div class="alert alert-danger" role="alert">error</div>
    </div>
    <div v-else class="bform py-5">
        <div class="row">
            <div class="container">
                <div class="col-lg-6 align-justify-center pr-4 pl-0 contact-form">
                    <div class="">
                        <form class="mt-3" @submit.prevent="sendToBack">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="full name" v-model="user.name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="email address" v-model="user.email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="password" v-model="user.password">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="confirm password" v-model="user.confirmPassword">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-md btn-block btn-danger-gradiant border-0">
                                        <span>Create Account</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>