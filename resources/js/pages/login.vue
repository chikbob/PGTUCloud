<template>
    <PageLayout>
        <LoginScreen></LoginScreen>
    </PageLayout>
</template>

<script setup lang="ts">
import PageLayout from "@/components/layouts/page-layout/page-layout.vue";
import LoginScreen from "@/screens/login-screen/login-screen.vue";

const props = defineProps({
    user: Object
})

console.log(props.user)
</script>

<style scoped>

</style>
