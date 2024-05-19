<template>
    <div :class="cnRegisterScreen('header')">
        Регистрация пользователя
    </div>
</template>

<script setup lang="ts">
import {cnRegisterScreen} from "./register-screen.const"
</script>

<style lang="scss" scoped>
.register-screen {
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
