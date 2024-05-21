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
@import "../../../../public/sass/media_mixin.scss";

.index-screen {
    @include _1570 {
        &__text {
            margin: 49px 0 150px;
            padding: 0 150px !important;

            text-align: justify;

            color: rgb(24, 24, 24);
            font-size: 20px;
            font-weight: 500;
        }
    }

    @include _1250 {
        &__text {
            margin: 49px 0 150px;
            padding: 0 60px !important;

            text-align: justify;

            color: rgb(24, 24, 24);
            font-size: 20px;
            font-weight: 500;
        }
    }

    @include _1170 {

    }

    @include _979 {

    }

    @include _768 {

    }

    @include _600 {
        &__text {
            margin: 49px 0 150px;
            padding: 0 30px !important;

            text-align: justify;

            color: rgb(24, 24, 24);
            font-size: 16px !important;
            font-weight: 500;
        }
    }

    @include _480 {
        &__text {
            margin: 49px 0 150px;
            padding: 0 30px !important;

            text-align: justify;

            color: rgb(24, 24, 24);
            font-size: 12px !important;
            font-weight: 500;
        }
    }

    @include _350 {

    }

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
