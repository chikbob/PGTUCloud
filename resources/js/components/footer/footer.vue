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
@import "../../../../public/sass/media_mixin.scss";

.footer {
    padding: 66px 200px 40px;
    background: rgb(0, 67, 164);
    color: rgb(236, 241, 255);

    @include _1570 {
        padding: 66px 150px 40px !important;
    }

    @include _1250 {
        padding: 66px 100px 40px !important;
    }

    @include _1170 {
        padding: 66px 60px 40px !important;
    }

    @include _979 {

    }

    @include _768 {

    }

    @include _600 {

    }

    @include _480 {

    }

    @include _350 {

    }
}
</style>
