<template>
    <div :class="cnIndexScreen('form')">
        <header :class="cnIndexScreen('form-header')">
            <div :class="cnIndexScreen('form-header_text')">
                Загрузить файл
            </div>
            <div :class="cnIndexScreen('form-header_description')">
                Загружать можно по 1-ому файлу за раз
            </div>
        </header>
        <form :class="cnIndexScreen('form-upload')" @submit.prevent="submit">
            <input :class="cnIndexScreen('form-upload_file')" ref="fileInput" type="file" @input="form.file"
                   @change="handleFileChange"/>
            <button :class="cnIndexScreen('form-upload_submit')" type="submit">Загрузить</button>
        </form>
        <div :class="cnIndexScreen('modal')" v-if="regUser" class="modal" @click="closeModal">
            <div :class="cnIndexScreen('modal-content')" class="modal-content" @click.stop>
                <h2>Модальное окно</h2>
                <p>Содержимое модального окна...</p>
                <div>
                    <Link href="/login">Войти</Link>
                    <br>
                    <Link href="/register">Зарегистрироваться</Link>
                </div>
                <br>
                <button :class="cnIndexScreen('modal-content_close')" @click="regUser = false" class="close-button">Закрыть</button>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import {cnIndexScreen} from "./index-screen.const"
import {fileModel, userModel} from "../file-screen/file-screen.model"
import {useForm} from '@inertiajs/vue3'

import {Inertia} from '@inertiajs/inertia'
import {ref} from 'vue';
import {Link} from "@inertiajs/inertia-vue3";

const modelUser = userModel();

const fileInput = ref<HTMLInputElement | null>(null);
const files = ref<any[]>([]);
let regUser = ref<boolean>(false);

const form = useForm({
    file: null,
})

function handleFileChange() {
    files.value = Array.from(fileInput.value?.files || [])
}

function submit() {
    if (modelUser.file == null && files.value.length == 0) {
        regUser.value = true;
    } else {
        for (let file of files.value) {
            const formData = {
                user_id: modelUser.user.id,
                name: file.name,
                lastModifiedDate: file.lastModifiedDate,
                size: file.size,
                type: file.type,
            }
            if (formData.type.length == 0) {
                formData.type = "Not found"
            }

            Inertia.post('file', formData)
        }
    }
}
</script>

<style lang="scss" scoped>
.index-screen {
    display: flex;
    flex-direction: column;
    align-items: center;

    &__form {
        width: 550px;
        height: 325px;

        border: 1px solid rgb(24, 24, 24);
        border-radius: 10px;

        &-header {
            display: flex;
            flex-direction: column;
            align-items: center;

            margin: 39px 0 37px;

            &_text {
                display: flex;
                justify-content: center;

                width: 351.53px;
                height: 43.58px;

                color: rgb(24, 24, 24);
                font-size: 32px;
                font-weight: 600;
            }

            &_description {
                display: flex;
                justify-content: center;

                width: 345.05px;
                height: 22.41px;

                color: rgb(135, 135, 135);
                font-size: 12px;
                font-weight: 400;
            }
        }

        &-upload {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            &_file {
                display: flex;
                justify-content: flex-end;
                align-items: center;
                font-weight: 500;

                margin: 0 0 36px;
            }

            &_submit {
                width: 201.06px;
                height: 54.79px;

                display: flex;
                justify-content: center;
                align-items: center;

                border: 1px solid rgb(40, 52, 122);
                border-radius: 5px;
                background: rgb(236, 241, 255);
            }
        }
    }
}

input[type=file]::file-selector-button {
    width: 201.06px;
    height: 54.79px;

    border: 1px solid rgb(40, 52, 122);
    border-radius: 5px;
    background: rgb(236, 241, 255);
    transition: 1s;
    cursor: pointer;

    margin: 0 14px 0 0;
}

input[type=file]::file-selector-button:hover {
    background: rgb(152, 178, 255);
    border: 1px solid rgb(25, 40, 124);
}

.index-screen {
    &__modal {
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999;

        &-content {
            position: absolute;
            width: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);

            &_close {
                background-color: #ccc;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
            }
        }
    }
}
</style>
