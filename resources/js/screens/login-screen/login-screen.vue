<template>
    <div :class="cnLoginScreen('')">
        <LoginScreenHeader></LoginScreenHeader>
        <LoginScreenForm></LoginScreenForm>
    </div>
</template>

<script setup lang="ts">
import LoginScreenHeader from "./login-screen__header.vue"
import LoginScreenForm from "./login-screen__form.vue"
import {cnLoginScreen} from "./login-screen.const"
</script>

<style lang="scss" scoped>
.login-screen {
    display: flex;
    flex-direction: column;
    align-items: center;
}
</style>
