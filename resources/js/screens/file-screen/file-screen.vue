<template>
    <div :class="cnFileScreen('')">
        <div>
            Список файлов:
        </div>
        <br>
        <div v-for="file in model.file">
            <div>{{ file }}</div>
        </div>
    </div>
</template>

<script setup lang="ts">
import {cnFileScreen} from "./file-screen.const"
import {fileModel} from "./file-screen.model"

const model = fileModel();
</script>

<style lang="scss" scoped>

</style>
