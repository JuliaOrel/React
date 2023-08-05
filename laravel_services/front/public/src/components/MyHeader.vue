<script setup>


import {useAuthStore} from "../stores/auth.store";


const authStore = useAuthStore();
const logout = () => {
    // Вызов действия "logout" из хранилища authStore
    authStore.logout();
};

</script>

<template>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <button type="button" class="btn btn-secondary"><RouterLink to="/">Home</RouterLink></button>
            <button type="button" class="btn btn-info"><RouterLink to="/posts">Recipes</RouterLink></button>
            <button type="button" class="btn btn-secondary"><RouterLink to="/about">About</RouterLink></button>
        </div>

        <div class="col-md-3 text-end">
            <!-- Условное отображение кнопки "Выйти" -->
            <template v-if="authStore.isLogin">
                <button type="button" class="btn btn-outline-primary me-2" @click="logout">Logout</button>
            </template>
            <template v-else>
                <button type="button" class="btn btn-outline-primary me-2"><RouterLink to="/login">Login</RouterLink></button>
                <button type="button" class="btn btn-outline-primary me-2"><RouterLink to="/register">Register</RouterLink></button>
            </template>
        </div>
    </header>
</template>

<style scoped>
header{
    background: #f0f0f0;
    height: 70px;
    margin: 4px;
}
button{
    margin: 2px;

}

.btn-info{
    background: rgb(66,224,245);
    border: none;
}

</style>