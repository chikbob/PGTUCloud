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
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');

body {
    margin: 0;
    border: 0;

    min-height: 100dvh;

    color: #000;
    font-family: Inter, serif;
    font-weight: 600;
    font-size: 1.2rem;
    font-style: normal;
}

a {
    display: inline-block;
    width: max-content;
}
</style>
