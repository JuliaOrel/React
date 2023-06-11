<script setup>
import {useAuthStore} from "@/stores/auth/auth";
import {useRouter} from "vue-router";
import {onMounted, ref} from "vue";
import {toast} from "vue3-toastify";
const router=useRouter();
const authStore=useAuthStore()
onMounted(() =>{
    if(authStore.isLogin) {
        toast.error("You are in the system")
        router.push('/');
    }
})
const userName = ref('')
const userEmail = ref('')
const userPassword = ref('')
const userConfirmPassword = ref('')

const user=ref({
    name: '', email: '', password: '', confirmPassword: ''
})

const sendToBack = () => {
authStore.doRegister(user.value)
    return false;
}
</script>

<template>
<h2>Registration form</h2>
    <div v-if="authStore.isPreload">
        <div class="spinner-border" role="status">
            <span class="sr-only"></span>
        </div>
    </div>
    <div v-else-if="authStore.isError">
        <div class="alert alert-danger" role="alert">Error</div>
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