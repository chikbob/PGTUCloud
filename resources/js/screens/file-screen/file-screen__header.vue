<template>
    <div :class="cnFileScreen('header')">
        Список файлов:
    </div>
</template>

<script setup lang="ts">
import {cnFileScreen} from "./file-screen.const"
</script>

<style lang="scss" scoped>
@import "../../../../public/sass/media_mixin.scss";

.file-screen {
    @include _600 {
        &__header {
            font-size: 30px !important;
        }
    }

    @include _480 {
        &__header {
            font-size: 26px !important;
        }
    }

    @include _350 {
        &__header {
            font-size: 22px !important;
        }
    }

    &__header {
        display: flex;
        justify-content: center;
        margin: 60px 0 46px;

        color: rgb(24, 24, 24);
        font-size: 32px;
        font-weight: 600;
        line-height: 38px;
    }
}
</style>
