<template>
    <div :class="cnHeader('bot')">
        <img src="../../../../public/img/logo.png">
        <div :class="cnHeader('bot-list')">
            <a href="/" :class="cnHeader('bot-list_link')">
                Главная
            </a>
            <a href="/list" :class="cnHeader('bot-list_link')">
                Список файлов
            </a>
            <a href="https://pstu.su/universitet/" target="_blank" :class="cnHeader('bot-list_link')">
                Университет
            </a>
            <a href="https://pstu.su/contact-us/" target="_blank" :class="cnHeader('bot-list_link')">
                Контакты
            </a>
        </div>
        <div :class="cnHeader('bot-login')">
            <div :class="cnHeader('bot-login_not')" v-if="modelUser.user == null || logout == true">
                <Link :class="cnHeader('bot-login_not_link')" href="/login">Логин</Link>
                <Link :class="cnHeader('bot-login_not_link')" href="/register">Регистрация</Link>
            </div>
            <div :class="cnHeader('bot-login_yes')" v-else>
                <div :class="cnHeader('bot-login_yes_name')">
                    {{ modelUser.user.name }}
                </div>
                <Link @click="logout = true" href="/logout" method="post" :class="cnHeader('bot-login_yes_exit')">
                    Выйти
                </Link>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import {cnHeader} from "./header.const.js";
import {userModel} from "../../screens/file-screen/file-screen.model"
import {Link} from "@inertiajs/inertia-vue3";
import {ref} from 'vue'

const modelUser = userModel();

let logout = ref(false)
</script>

<style lang="scss" scoped>
.header {
    &__bot {
        display: flex;
        justify-content: space-between;

        font-size: 20px;

        & img {
            width: 100px;
            height: 100px;
        }

        &-list {
            display: flex;
            align-items: center;

            &_link {
                color: rgb(24, 24, 24);
                font-weight: 600;
                text-decoration: none;

                margin: 0 13px 0;
            }
        }

        &-login {
            display: flex;
            align-items: center;

            &_not {
                display: flex;

                &_link {
                    color: rgb(24, 24, 24);
                    font-weight: 600;
                    text-decoration: none;

                    &:first-child {
                        margin: 0 12px 0 0;
                    }
                }
            }

            &_yes {
                display: flex;

                &_name {
                    margin: 0 12px 0 0
                }

                &_exit {
                    color: rgb(135, 135, 135);
                    font-size: 20px;
                    font-weight: 600;

                    text-decoration: none;
                }
            }


        }
    }
}
</style>
