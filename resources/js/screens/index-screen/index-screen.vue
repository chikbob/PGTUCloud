<template>
    <div :class="cnIndexScreen('')">
        <a href="/list">
            Список файлов
        </a>
        <br>
        <br>
        <form @submit.prevent="submit">
            <input ref="fileInput" type="file" @input="form.file" @change="handleFileChange"/>
            <button type="submit">Post</button>
        </form>
        <div v-if="model.file == null">
            <Link href="/register">Зарегистрироваться</Link>
            <br>
            <br>
            <Link href="/login">Уже есть аккаунт?</Link>
            <br>
            <br>
        </div>
        <div v-else>
            <div>
                Добрый день {{ model.file.name }}
            </div>
            <Link href="/logout" method="post">Выйти</Link>
        </div>

        <div v-if="regUser" class="modal" @click="closeModal">
            <div class="modal-content" @click.stop>
                <h2>Модальное окно</h2>
                <p>Содержимое модального окна...</p>
                <div><Link href="/login">Войти</Link><br><Link href="/register">Зарегистрироваться</Link></div>
                <br>
                <button @click="regUser = false" class="close-button">Закрыть</button>
            </div>
        </div>
        <div v-for="file in model.file">
            <div>{{ file }}</div>
        </div>
    </div>
</template>

<script setup lang="ts">
import {cnIndexScreen} from "./index-screen.const"
import {fileModel} from "../file-screen/file-screen.model"
import {useForm} from '@inertiajs/vue3'
import { Link } from '@inertiajs/inertia-vue3'
import {Inertia} from '@inertiajs/inertia'
import {ref} from 'vue';

const model = fileModel();

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
    if (model.file == null) {
        regUser.value = true;
    } else {
        for (let file of files.value) {
            const formData = {
                user_id: model.file.id,
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
.modal {
    display: block;
    position: fixed;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9999;
}

.modal-content {
    position: absolute;
    width: 50%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.close-button {
    background-color: #ccc;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}
</style>
