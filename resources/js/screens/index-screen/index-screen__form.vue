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
            <button v-if="modelUser.user != null" :class="cnIndexScreen('form-upload_submit')" type="submit">
                Загрузить
            </button>
            <button v-else :class="cnIndexScreen('form-upload_submit')" @click="unReg">
                Загрузить
            </button>
        </form>
    </div>
</template>

<script setup lang="ts">
import {cnIndexScreen} from "./index-screen.const"
import {fileModel, userModel} from "../file-screen/file-screen.model"
import {useForm} from '@inertiajs/vue3'

import {Inertia} from '@inertiajs/inertia'
import {computed, ref} from 'vue';
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
    if (files.value.length != 0) {
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
            load()
            Inertia.post('file', formData)
        }
    } else {
        Swal.fire({
            icon: "error",
            title: "Вы не добавили файл!",
            text: "Пожалуйста выберите файл который хотите загрузить!"
        });
    }
}

function unReg() {
    Swal.fire({
        title: "У вас нет аккаунта?",
        text: `Зарегистрируйтесь или войдите в аккаунт!`,
        icon: "question"
    });
}

function load() {
    let timerInterval;
    Swal.fire({
        title: "Загружаем файл",
        timer: 2000,
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading();
            const timer = Swal.getPopup().querySelector("b");
            timerInterval = setInterval(() => {
                timer.textContent = `${Swal.getTimerLeft()}`;
            }, 100);
        },
        willClose: () => {
            clearInterval(timerInterval);
        }
    });
}
</script>

<style lang="scss" scoped>
@import "../../../../public/sass/media_mixin.scss";

.index-screen {
    display: flex;
    flex-direction: column;
    align-items: center;

    @include _1570 {

    }

    @include _1250 {

    }

    @include _1170 {

    }

    @include _979 {

    }

    @include _768 {

    }

    @include _600 {
        input[type=file]::file-selector-button {
            width: 150px !important;
            height: 40px !important;

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

        &__form {
            width: 450px !important;
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
                    align-items: center !important;
                    font-weight: 500;

                    font-size: 14px !important;

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

    @include _480 {
        input[type=file]::file-selector-button {
            width: 150px !important;
            height: 40px !important;

            margin: 0 14px 0 0;
        }

        &__form {
            width: 300px !important;
            height: 300px !important;

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

                    width: fit-content !important;
                    height: 35px !important;

                    font-size: 24px !important;
                    font-weight: 600;
                }

                &_description {
                    display: flex;
                    justify-content: center;

                    width: fit-content !important;
                    height: 22.41px;

                    color: rgb(135, 135, 135);
                    font-size: 10px !important;
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
                    align-items: center !important;
                    font-weight: 500;

                    font-size: 12px !important;

                    margin: 0 0 36px;
                }

                &_submit {
                    width: 150px !important;
                    height: 40px !important;

                    display: flex;
                    justify-content: center;
                    align-items: center;

                    font-size: 14px !important;
                }
            }
        }
    }

    @include _350 {

    }

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

                &:hover {
                    background: rgb(152, 178, 255);
                    border: 1px solid rgb(25, 40, 124);
                    transition: 1s;
                }
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
</style>
