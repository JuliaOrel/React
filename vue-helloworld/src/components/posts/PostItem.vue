<script setup>
let postData={
    title: "Hello world",
    body: "Post's text",
    likes:{
        count:10
    }
}
</script>

<template>
<article>
    <header>{{postData.title}}</header>
    <div>{{postData.body}}</div>
    <footer>{{postData.likes.count}}</footer>
</article>
</template>

<style scoped>

</style>