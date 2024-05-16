<template>
    <Header/>
    <slot/>
    <Footer/>
</template>

<script setup>
import Header from "../../header/header.vue";
import Footer from "../../footer/footer.vue";
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&display=swap');

body {
    margin: 0;
    border: 0;

    min-height: 100dvh;

    color: #181818;
    font-family: "Bitter", serif;
    font-weight: 600;
    font-size: 1.2rem;
    font-style: normal;
}

a {
    display: inline-block;
    width: max-content;
}
</style>
