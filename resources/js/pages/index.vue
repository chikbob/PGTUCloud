<template>
    <PageLayout>
        <IndexScreen></IndexScreen>
    </PageLayout>
</template>

<script setup lang="ts">
import PageLayout from "../components/layouts/page-layout/page-layout.vue";
import IndexScreen from "../screens/index-screen/index-screen.vue";
import {fileModel, userModel} from "../screens/file-screen/file-screen.model"

const props = defineProps({
    user: Object,
})

const modelUser = userModel()
modelUser.init(props.user)
</script>
