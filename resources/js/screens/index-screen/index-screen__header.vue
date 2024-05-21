<template>
    <header :class="cnIndexScreen('header')">
        Страница для добавления файлов
    </header>
</template>

<script setup lang="ts">
import {cnIndexScreen} from "./index-screen.const"
</script>

<style lang="scss" scoped>
@import "../../../../public/sass/media_mixin.scss";

.index-screen {
    &__header {
        display: flex;
        justify-content: center;

        margin: 58px 0 48px;

        color: rgb(24, 24, 24);
        font-size: 32px;
        font-weight: 600;
    }

    @include _600 {
        &__header {
            display: flex;
            justify-content: center;

            margin: 58px 0 48px;

            color: rgb(24, 24, 24);
            font-size: 26px !important;
            font-weight: 600;
        }
    }

    @include _480 {
        &__header {
            display: flex;
            justify-content: center;

            margin: 58px 30px 48px !important;
            text-align: center;

            color: rgb(24, 24, 24);
            font-size: 20px !important;
            font-weight: 600;
        }
    }

    @include _350 {
        &__header {
            display: flex;
            justify-content: center;

            margin: 58px 30px 48px !important;
            text-align: center;

            color: rgb(24, 24, 24);
            font-size: 18px !important;
            font-weight: 600;
        }
    }
}
</style>
