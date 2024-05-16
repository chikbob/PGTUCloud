<template>
    <div :class="cnFooter('top')">
        <FooterPGTULinks></FooterPGTULinks>
        <FooterWEBLinks></FooterWEBLinks>
        <FooterSocial></FooterSocial>
    </div>
</template>

<script setup lang="ts">
import {cnFooter} from "./footer.const.js";
import FooterPGTULinks from "./footer__pgtuLinks.vue"
import FooterWEBLinks from "./footer__webLinks.vue"
import FooterSocial from "./footer__social.vue"
</script>

<style lang="scss" scoped>
.footer__top {
    display: flex;
}
</style>
