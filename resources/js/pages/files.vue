<template>
    <PageLayout>
        <FileScreen></FileScreen>
    </PageLayout>
</template>

<script setup lang="ts">
import PageLayout from "@/components/layouts/page-layout/page-layout.vue";
import FileScreen from "@/screens/file-screen/file-screen.vue";
import {fileModel} from "../screens/file-screen/file-screen.model"

const props = defineProps({
    files: Object,
})

const model = fileModel()
model.init(props.files)
</script>

<style scoped>

</style>
