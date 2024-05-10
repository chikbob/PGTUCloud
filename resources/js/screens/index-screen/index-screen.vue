<template>
    <div :class="cnIndexScreen('')">
        <form @submit.prevent="submit">
            <input ref="fileInput" type="file" @input="form.file" @change="handleFileChange" multiple/>
            <button type="submit">Post</button>
        </form>
        <br>
        <div v-for="file in files">
            <div> {{ file.name }}</div>
            <div> {{ formatBytes(file.size) }}</div>
        </div>
        <a href="/register">Зарегистрироваться</a>
        <br>
        <br>
        <div v-for="file in model.file">
            <div>{{ file }}</div>
        </div>
    </div>
</template>

<script setup lang="ts">
import {cnIndexScreen} from "./index-screen.const"
import {fileModel} from "./file-screen.model"
import {useForm} from '@inertiajs/vue3'
import {Inertia} from '@inertiajs/inertia'
import {ref} from 'vue';

const model = fileModel();

const fileInput = ref<HTMLInputElement | null>(null);
const files = ref<any[]>([]);
let requestComplete = false

const form = useForm({
    file: null,
})

function handleFileChange() {
    files.value = Array.from(fileInput.value?.files || [])
}

function formatBytes(a, b = 2) {
    if (!+a) return "0 Bytes";
    const c = 0 > b ? 0 : b, d = Math.floor(Math.log(a) / Math.log(1024));
    return `${parseFloat((a / Math.pow(1024, d)).toFixed(c))} ${["Байт", "Кб", "Мб", "Гб", "Тб", "Пб", "Еб", "Зб", "Уб"][d]}`
}

function submit() {
    for (let file of files.value) {
        const formData = {
            name: file.name,
            lastModifiedDate: file.lastModifiedDate,
            size: file.size,
            type: file.type,
        }
        if (formData.type.length == 0) {
            formData.type = "Not found"
        }
        console.log(formData)
        requestComplete = true

        Inertia.post('file', formData)
    }
}
</script>

<style lang="scss" scoped>

</style>
