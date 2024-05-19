<template>
    <div :class="cnRegisterScreen('')">
        <RegisterScreenHeader></RegisterScreenHeader>
        <RegisterScreenForm></RegisterScreenForm>
    </div>
</template>

<script setup lang="ts">
import RegisterScreenHeader from "./register-screen__header.vue"
import RegisterScreenForm from "./register-screen__form.vue"
import {cnRegisterScreen} from "./register-screen.const"
</script>

<style lang="scss" scoped>
.register-screen {
    display: flex;
    flex-direction: column;
    align-items: center;
}
</style>
