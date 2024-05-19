<template>
    <div :class="cnLoginScreen('header')">Логин</div>
</template>

<script setup lang="ts">
import {cnLoginScreen} from "./login-screen.const"
</script>

<style lang="scss" scoped>
.login-screen {
    &__header {
        display: flex;
        justify-content: center;

        width: 543px;
        height: 43px;

        color: rgb(24, 24, 24);
        font-size: 32px;
        font-weight: 600;
        line-height: 38px;

        margin: 53px 0;
    }
}
</style>
