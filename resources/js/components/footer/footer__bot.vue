<template>
    <div :class="cnFooter('bot')">
        <div :class="cnFooter('bot-name')">
            2024 Федеральное государственное бюджетное образовательное учреждение высшего образования «Приазовский
            государственный технический университет» (ФГБОУ ВО «ПГТУ»)
        </div>
        <div :class="cnFooter('bot-rights')">
            Все права принадлежат <a href="https://pstu.su/" target="_blank" :class="cnFooter('bot-rights_link')">pstu.su</a>
        </div>
    </div>
</template>

<script setup lang="ts">
import {cnFooter} from "./footer.const.js";
</script>

<style lang="scss" scoped>
@import "../../../../public/sass/media_mixin.scss";

.footer__bot {
    display: flex;
    justify-content: space-between;

    margin: 74px 0 0;

    @include _979 {
        flex-direction: column;
        align-items: center;

        margin: 74px 0 0;

        &-name {
            width: 300px !important;

            margin: 0 0 20px;

            font-size: 14px;
            font-weight: 600;
            line-height: 17px;
        }

        &-rights {
            width: 300px !important;

            font-size: 14px;
            font-weight: 600;
            line-height: 17px;
        }
    }

    @include _768 {

    }

    @include _600 {

    }

    @include _480 {

    }

    @include _350 {

    }

    &-name {
        width: 505px;

        color: rgba(233, 239, 255, 0.8);
        font-size: 14px;
        font-weight: 600;
        line-height: 17px;
    }

    &-rights {
        width: 222px;

        font-size: 14px;
        font-weight: 600;
        line-height: 17px;
        color: rgba(233, 239, 255, 0.8);

        &_link {
            color: rgba(233, 239, 255);
        }
    }
}
</style>
