<template>
    <PageLayout>
        <FileScreen></FileScreen>
    </PageLayout>
</template>

<script setup lang="ts">
import PageLayout from "@/components/layouts/page-layout/page-layout.vue";
import FileScreen from "@/screens/file-screen/file-screen.vue";
import {fileModel, userModel} from "../screens/file-screen/file-screen.model"

const props = defineProps({
    files: Object,
    user: Object
})

const modelFile = fileModel()
const modelUser = userModel()
modelFile.init(props.files)
modelUser.init(props.user)
</script>

<style scoped>

</style>
