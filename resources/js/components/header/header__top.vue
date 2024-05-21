<template>
    <div :class="cnHeader('top')">
        <div :class="cnHeader('top-text')">
            Телефон бесплатной федеральной круглосуточной горячей линии по оказанию психологической помощи студенческой
            молодежи:
            <a href="tel:+88002225571" :class="cnHeader('top-text_link')">8-800-222-55-71</a>
        </div>
    </div>
</template>

<script setup lang="ts">
import {cnHeader} from "./header.const.js";
</script>

<style lang="scss" scoped>
@import "../../../../public/sass/media_mixin.scss";

.header {
    @include _600 {
        &__top {
            display: flex;
            justify-content: flex-end;

            &-text {
                margin: 19px 0 0;

                width: 511px;
                height: 66px;

                font-size: 14px !important;
                font-weight: 500;
                line-height: 14px !important;

                text-align: end;
            }
        }
    }

    @include _480 {
        &__top {
            display: flex;
            justify-content: flex-end;

            &-text {
                margin: 19px 0 0;

                width: 511px;
                height: 66px;

                font-size: 12px !important;
                font-weight: 500;
                line-height: 12px !important;

                text-align: end;
            }
        }
    }

    @include _350 {
        &__top {
            display: flex;
            justify-content: flex-end;

            &-text {
                margin: 19px 0 0;

                width: 511px;
                height: 66px;

                font-size: 10px !important;
                font-weight: 500;
                line-height: 10px !important;

                text-align: end;
            }
        }
    }

    &__top {
        display: flex;
        justify-content: flex-end;

        &-text {
            margin: 19px 0 0;

            width: 511px;
            height: 66px;

            font-size: 16px;
            font-weight: 500;
            line-height: 19px;

            text-align: end;

            &_link {
                color: #28347A;
            }
        }
    }
}
</style>
