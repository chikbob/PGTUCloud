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
.header {
    padding: 0 200px;
}
</style>
