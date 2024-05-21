<template>
    <div :class="cnFooter('webLinks')">
        <header :class="cnFooter('webLinks-header')">
            На сайте
        </header>
        <div :class="cnFooter('webLinks-list')">
            <a href="/" :class="cnFooter('webLinks-list_link')">
                > Главная
            </a>
            <a href="/list" :class="cnFooter('webLinks-list_link')">
                > Список файлов
            </a>
            <a href="https://pstu.su/universitet/" target="_blank" :class="cnFooter('webLinks-list_link')">
                > Университет
            </a>
            <a href="https://pstu.su/contact-us/" target="_blank" :class="cnFooter('webLinks-list_link')">
                > Контакты
            </a>
            <a href="/login" :class="cnFooter('webLinks-list_link')">
                > Логин
            </a>
            <a href="/register" :class="cnFooter('webLinks-list_link')">
                > Регистрация
            </a>
        </div>
        <FooterContacts></FooterContacts>
    </div>
</template>

<script setup lang="ts">
import {cnFooter} from "./footer.const.js";
import FooterContacts from "./footer__contacts.vue"
</script>

<style lang="scss" scoped>
@import "../../../../public/sass/media_mixin.scss";

.footer__webLinks {
    width: 300px;

    @include _1570 {

    }

    @include _1250 {
        width: 250px !important;
    }

    @include _1170 {

    }

    @include _979 {
        width: 300px !important;
        margin: 50px 0 !important;

        &-header {
            margin: 0 0 25px;

            font-size: 24px !important;
        }

        &-list {
            display: flex;
            flex-direction: column;

            padding: 0 0 35.5px !important;
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

        padding: 0 0 243.5px;
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
