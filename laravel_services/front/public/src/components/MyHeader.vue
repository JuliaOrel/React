<script setup>

</script>

<template>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <button type="button" class="btn btn-secondary"><RouterLink to="/">Home</RouterLink></button>
            <button type="button" class="btn btn-info"><RouterLink to="/about">Add recipe</RouterLink></button>
            <button type="button" class="btn btn-secondary"><RouterLink to="/about">About</RouterLink></button>
        </div>

        <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2"><RouterLink to="/login">Login</RouterLink></button>
            <button type="button" class="btn btn-outline-primary me-2"><RouterLink to="/register">Register</RouterLink></button>
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
    background: #98fb98;
    border: none;
}

</style>