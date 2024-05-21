<template>
    <div :class="cnFooter('pgtuLinks')">
        <header :class="cnFooter('pgtuLinks-header')">
            Университет
        </header>
        <div :class="cnFooter('pgtuLinks-list')">
            <a href="https://pstu.su/novosti/" target="_blank" :class="cnFooter('pgtuLinks-list_link')">
                > Новости
            </a>
            <a href="https://pstu.su/novosti/videokanal-pgtu/" target="_blank" :class="cnFooter('pgtuLinks-list_link')">
                > Видеоканал ПГТУ
            </a>
            <a href="https://pstu.su/universitet/institut-srednego-professionalnogo-obrazovaniya/" target="_blank"
               :class="cnFooter('pgtuLinks-list_link')">
                > Институт среднего профессионального образования
            </a>
            <a href="https://pstu.su/sveden/struktura-i-organy-upravleniya-obrazovatelnoj-organizacii-old/"
               target="_blank"
               :class="cnFooter('pgtuLinks-list_link')">
                > Структура университета
            </a>
            <a href="https://pstu.su/universitet/sotrudnichestvo/" target="_blank"
               :class="cnFooter('pgtuLinks-list_link')">
                > Сотрудничество
            </a>
            <a href="https://pstu.su/universitet/uchenyj-sovet/" target="_blank"
               :class="cnFooter('pgtuLinks-list_link')">
                > Ученый совет
            </a>
            <a href="https://pstu.su/universitet/istoriya/" target="_blank" :class="cnFooter('pgtuLinks-list_link')">
                > История
            </a>
            <a href="https://pstu.su/universitet/kuznica-v-obektive/" target="_blank"
               :class="cnFooter('pgtuLinks-list_link')">
                > Гранты и проекты
            </a>
            <a href="https://pstu.su/profilaktika-terrorizma-i-ekstremizma/" target="_blank"
               :class="cnFooter('pgtuLinks-list_link')">
                > Профилактика терроризма и экстримизма
            </a>
            <a href="https://pstu.su/protivodejstvie-korrupcii/" target="_blank"
               :class="cnFooter('pgtuLinks-list_link')">
                > Противодействие коррупции
            </a>
            <a href="https://pstu.su/contact-us/" target="_blank" :class="cnFooter('pgtuLinks-list_link')">
                > Контактная информация
            </a>
        </div>
        <div :class="cnFooter('pgtuLinks-description')">
            При использовании материалов портала активная ссылка на источник обязательна
        </div>
    </div>
</template>

<script setup lang="ts">
import {cnFooter} from "./footer.const.js";
</script>

<style lang="scss" scoped>
@import "../../../../public/sass/media_mixin.scss";

.footer__pgtuLinks {
    width: 300px;

    @include _1700 {

    }

    @include _1570 {

    }

    @include _1250 {
        width: 250px !important;

        &-header {
            margin: 0 0 25px;

            font-size: 20px;
        }

        &-list {
            display: flex;
            flex-direction: column;

            padding: 0 0 35.5px;
            margin: 0 0 15.5px;
            line-height: 19px;

            border-bottom: 1px solid rgb(255, 255, 255);

            &_link {
                margin: 0 0 15px;
                width: 250px !important;

                font-size: 16px;

                color: rgb(236, 241, 255);
                text-decoration: none;

                &:last-child {
                    margin: 0;
                }
            }
        }

        &-description {
            line-height: 19px;
            color: rgb(236, 241, 255);
            font-size: 16px;
            font-weight: 400;
            text-align: justify;
        }
    }

    @include _1170 {

    }

    @include _979 {
        width: 300px !important;

        &-header {
            margin: 0 0 25px;

            font-size: 24px !important;
        }

        &-list {
            display: flex;
            flex-direction: column;

            padding: 0 0 35.5px;
            margin: 0 0 15.5px;
            line-height: 19px;

            border-bottom: 1px solid rgb(255, 255, 255);

            &_link {
                margin: 0 0 15px;
                width: 300px !important;

                font-size: 16px;

                color: rgb(236, 241, 255);
                text-decoration: none;

                &:last-child {
                    margin: 0;
                }
            }
        }

        &-description {
            line-height: 19px;
            color: rgb(236, 241, 255);
            font-size: 16px;
            font-weight: 400;
            text-align: justify;
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

    &-header {
        margin: 0 0 25px;

        font-size: 20px;
    }

    &-list {
        display: flex;
        flex-direction: column;

        padding: 0 0 35.5px;
        margin: 0 0 15.5px;
        line-height: 19px;

        border-bottom: 1px solid rgb(255, 255, 255);

        &_link {
            margin: 0 0 15px;
            width: 300px;

            font-size: 16px;

            color: rgb(236, 241, 255);
            text-decoration: none;

            &:last-child {
                margin: 0;
            }
        }
    }

    &-description {
        line-height: 19px;
        color: rgb(236, 241, 255);
        font-size: 16px;
        font-weight: 400;
        text-align: justify;
    }
}
</style>
