<template>
    <header :class="cnIndexScreen('header')">
        Страница для добавления файлов
    </header>
</template>

<script setup lang="ts">
import {cnIndexScreen} from "./index-screen.const"
</script>

<style lang="scss" scoped>
.index-screen {
    &__header {
        display: flex;
        justify-content: center;

        margin: 58px 0 48px;

        color: rgb(24, 24, 24);
        font-size: 32px;
        font-weight: 600;
    }
}
</style>
