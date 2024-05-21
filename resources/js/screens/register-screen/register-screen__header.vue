<template>
    <div :class="cnRegisterScreen('header')">
        Регистрация пользователя
    </div>
</template>

<script setup lang="ts">
import {cnRegisterScreen} from "./register-screen.const"
</script>

<style lang="scss" scoped>
@import "../../../../public/sass/media_mixin.scss";

.register-screen {
    @include _768 {
        &__header {
            display: flex;
            justify-content: center;

            width: fit-content !important;
            height: fit-content !important;

            text-align: center;
            padding: 0 50px;

            color: rgb(24, 24, 24);
            font-size: 30px !important;
            font-weight: 600;
            line-height: 38px;

            margin: 200px 0 53px !important;
        }
    }

    @include _600 {

    }

    @include _480 {

    }

    @include _350 {
        &__header {
            display: flex;
            justify-content: center;

            width: fit-content !important;
            height: fit-content !important;

            text-align: center;

            font-size: 28px !important;
            font-weight: 600;
            line-height: 38px;

            margin: 200px 0 53px !important;
        }
    }

    &__header {
        display: flex;
        justify-content: center;

        width: fit-content !important;
        height: 43px;

        color: rgb(24, 24, 24);
        font-size: 32px;
        font-weight: 600;
        line-height: 38px;

        margin: 53px 0;
    }

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
