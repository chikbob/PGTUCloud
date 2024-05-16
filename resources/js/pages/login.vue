<template>
    <PageLayout>
        <LoginScreen></LoginScreen>
    </PageLayout>
</template>

<script setup lang="ts">
import PageLayout from "@/components/layouts/page-layout/page-layout.vue";
import LoginScreen from "@/screens/login-screen/login-screen.vue";
import {fileModel, userModel} from "../screens/file-screen/file-screen.model"

const props = defineProps({
    user: Object,
})

const modelUser = userModel()
modelUser.init(props.user)
</script>

<style scoped>

</style>
