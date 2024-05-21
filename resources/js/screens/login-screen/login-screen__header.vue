<template>
    <div :class="cnLoginScreen('header')">Логин</div>
</template>

<script setup lang="ts">
import {cnLoginScreen} from "./login-screen.const"
</script>

<style lang="scss" scoped>
@import "../../../../public/sass/media_mixin.scss";

.login-screen {
    @include _768 {
        &__header {
            display: flex;
            justify-content: center;

            width: fit-content !important;
            height: 43px;

            color: rgb(24, 24, 24);
            font-size: 32px;
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
            height: 43px;

            color: rgb(24, 24, 24);
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
}
</style>
