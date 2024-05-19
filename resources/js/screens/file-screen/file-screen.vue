<template>
    <div :class="cnFileScreen('')">
        <FileScreenHeader></FileScreenHeader>
        <FileScreenTable></FileScreenTable>
    </div>
</template>

<script setup lang="ts">
import {cnFileScreen} from "./file-screen.const"
import FileScreenHeader from "./file-screen__header.vue"
import FileScreenTable from "./file-screen__table.vue"
</script>

<style lang="scss" scoped>
.file-screen {
    display: flex;
    flex-direction: column;
    align-items: center;
}
</style>
