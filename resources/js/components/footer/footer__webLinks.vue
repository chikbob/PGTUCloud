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
.footer__webLinks {
    width: 300px;
    margin: 0 92px;

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
