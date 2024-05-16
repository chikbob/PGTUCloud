<template>
    <footer :class="cnFooter()">
        <FooterTop></FooterTop>
        <FooterBot></FooterBot>
    </footer>
</template>

<script setup lang="ts">
import {cnFooter} from "./footer.const.js";
import FooterTop from "./footer__top.vue"
import FooterBot from "./footer__bot.vue"
</script>

<style lang="scss">
.footer {
    padding: 66px 200px 40px;
    background: rgb(0, 67, 164);
    color: rgb(236, 241, 255);
}
</style>
