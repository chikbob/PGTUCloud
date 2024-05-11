<template>
    <div :class="cnFileScreen('')">
        <div>
            Список файлов:
        </div>
        <br>
        <div v-for="file in model.file">
            <div class="block">
                <div class="item">{{ file.name }}</div>
                <div class="item">{{ formatBytes(file.size) }}</div>
                <div class="item">{{ formatDateTime(file.updated_at) }}</div>
                <button @click="deleteFile(file.id)" type="submit">Delete</button>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import {cnFileScreen} from "./file-screen.const"
import {fileModel} from "./file-screen.model"
import {Inertia} from '@inertiajs/inertia'

const model = fileModel();

function formatBytes(a, b = 2) {
    if (!+a) return "0 Bytes";
    const c = 0 > b ? 0 : b, d = Math.floor(Math.log(a) / Math.log(1024));
    return `${parseFloat((a / Math.pow(1024, d)).toFixed(c))} ${["Байт", "Кб", "Мб", "Гб", "Тб", "Пб", "Еб", "Зб", "Уб"][d]}`
}

function formatDateTime(dateTimeString) {
    const date = new Date(dateTimeString);
    const day = date.getDate();
    const month = date.getMonth() + 1;
    const year = date.getFullYear();
    const hours = date.getHours();
    const minutes = date.getMinutes();

    const formattedDate = `${day < 10 ? '0' + day : day}.${month < 10 ? '0' + month : month}.${year}`;
    const formattedTime = `${hours < 10 ? '0' + hours : hours}:${minutes < 10 ? '0' + minutes : minutes}`;

    return `${formattedDate} ${formattedTime}`;
}

function deleteFile(id) {
    if (confirm('Вы уверенны?')) {
        Inertia.delete(`file/${id}`, id)
    }
}
</script>

<style lang="scss" scoped>
.block {
    display: flex;
    align-items: center;
}

.item {
    margin: 0 1.5rem;

    &:first-child {
        margin: 0 1.5rem 0 0;
    }

    &:last-child {
        margin: 0 0 0 1.5rem;
    }
}
</style>
