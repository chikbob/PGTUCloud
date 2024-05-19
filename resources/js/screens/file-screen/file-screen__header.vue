<template>
    <div :class="cnFileScreen('header')">
        Список файлов:
    </div>
</template>

<script setup lang="ts">
import {cnFileScreen} from "./file-screen.const"
</script>

<style lang="scss" scoped>
.file-screen {
    &__header {
        display: flex;
        justify-content: center;
        margin: 53px 0 46px;

        color: rgb(24, 24, 24);
        font-size: 32px;
        font-weight: 600;
        line-height: 38px;
    }
}
</style>
