<template>
    <div :class="cnFooter('contacts')">
        <header :class="cnFooter('contacts-header')">Контакты</header>
        <div :class="cnFooter('contacts-list')">
            <div :class="cnFooter('contacts-item')">
                <img :class="cnFooter('contacts-item_img')" src="../../../../public/img/map.png" alt="map.png">
                <div :class="cnFooter('contacts-item_text')">
                    г. Мариуполь, ул. Университетская, 7
                </div>
            </div>
            <div :class="cnFooter('contacts-item')">
                <img style="height: 15px; width: 15px" :class="cnFooter('contacts-item_img')" src="../../../../public/img/message.png" alt="message.png">
                <a :class="cnFooter('contacts-item_text')" href="mailto:office-pstu@yandex.ru">
                    office-pstu@yandex.ru
                </a>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import {cnFooter} from "./footer.const.js";
</script>

<style lang="scss" scoped>
.footer__contacts {
    &-header {
        color: rgb(174, 174, 174);
        font-size: 16px;
        font-weight: 600;
        line-height: 19px;
    }

    &-list {

    }

    &-item {
        display: flex;
        align-items: flex-start;

        &:first-child {
            margin: 15px 0;
        }

        &_img {
            margin: 0 8px 0 0;

            height: 20px;
        }

        &_text {
            width: 280px;
            height: 38px;

            color: rgb(236, 241, 255);
            font-size: 16px;
            font-weight: 400;
            line-height: 19px;
        }
    }
}
</style>
