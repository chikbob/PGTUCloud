<template>
    <div :class="cnFooter('social')">
        <header :class="cnFooter('social-header')">
            Мы в соцсетях
        </header>
        <div :class="cnFooter('social-list')">
            <a href="" :class="cnFooter('social-list_link')">
                <img :class="cnFooter('social-list_img')" src="../../../../public/img/vk.png" alt="vk.png">
            </a>
            <a href="" :class="cnFooter('social-list_link')">
                <img :class="cnFooter('social-list_img')" src="../../../../public/img/telegram.png" alt="telegram.png">
            </a>
        </div>
        <div :class="cnFooter('social-list')">
            <a href="" :class="cnFooter('social-list_link')">
                <img :class="cnFooter('social-list_img')" src="../../../../public/img/ok.png" alt="ok.png">
            </a>
            <a href="" :class="cnFooter('social-list_link')">
                <img :class="cnFooter('social-list_img')" src="../../../../public/img/rutube.png" alt="rutube.png">
            </a>
        </div>
    </div>
</template>

<script setup lang="ts">
import {cnFooter} from "./footer.const.js";
</script>

<style lang="scss" scoped>
.footer__social {
    width: 300px;

    &-header {
        display: flex;
        justify-content: center;

        color: rgb(236, 241, 255);
        font-size: 20px;
        font-weight: 600;
        line-height: 24px;

        margin: 0 0 34px;
    }

    &-list {
        display: flex;
        justify-content: space-around;

        margin: 0 0 20px;

        &_link {

        }

        &_img {
            width: 110px;
            height: 110px;
        }
    }
}
</style>
