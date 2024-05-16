<template>
    <div :class="cnIndexScreen('text')">
        ПГТУ предлагает удобное и безопасное решение для обмена и хранения документов в университете. Наше
        приложение позволяет отправлять, удалять и хранить файлы различных форматов и размеров.
    </div>
</template>

<script setup lang="ts">
import {cnIndexScreen} from "./index-screen.const"
</script>

<style lang="scss" scoped>
.index-screen {
    &__text {
        margin: 49px 0 150px;
        padding: 0 200px;

        text-align: justify;

        color: rgb(24, 24, 24);
        font-size: 20px;
        font-weight: 500;
    }
}
</style>
