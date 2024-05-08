<template>
    <PageLayout>
        <IndexScreen></IndexScreen>
    </PageLayout>
</template>

<script setup lang="ts">
import PageLayout from "../components/layouts/page-layout/page-layout.vue";
import IndexScreen from "../screens/index-screen/index-screen.vue";
import {fileModel} from "../screens/index-screen/file-screen.model"

const props = defineProps({
    files: Object,
})

const model = fileModel()
model.init(props.files)
</script>
