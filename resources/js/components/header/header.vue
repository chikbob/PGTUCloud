<template>
    <header :class="cnHeader()">
        <HeaderTop></HeaderTop>
        <HeaderBot></HeaderBot>
    </header>
</template>

<script lang="ts" setup>
import {cnHeader} from "./header.const.js";
import HeaderTop from './header__top.vue'
import HeaderBot from './header__bot.vue'
</script>

<style lang="scss" scoped>
@import "../../../../public/sass/media_mixin.scss";

.header {
    padding: 0 200px;

    @include _1570 {
        padding: 0 150px;
    }

    @include _1250 {
        padding: 0 100px;
    }

    @include _1170 {
        padding: 0 60px;
    }

    @include _979 {

    }

    @include _768 {

    }

    @include _600 {

    }

    @include _480 {
        padding: 0 30px;
    }

    @include _350 {
        padding: 0 30px;
    }
}
</style>
