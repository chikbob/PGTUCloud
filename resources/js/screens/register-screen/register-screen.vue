<template>
    <div :class="cnRegisterScreen('')">
        <h1>Регистрация пользователя</h1>
        <form @submit.prevent="registerUser">
            <div>
                <label for="name">Имя:</label>
                <input type="text" id="name" v-model="form.name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" v-model="form.email" required>
            </div>
            <div>
                <label for="password">Пароль:</label>
                <input type="password" id="password" v-model="form.password" required>
            </div>
            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>
</template>

<script setup lang="ts">
import {cnRegisterScreen} from "./register-screen.const"
import { defineProps, ref } from 'vue'
import { useStore } from 'pinia'
import { Inertia } from '@inertiajs/inertia'

const form = ref({
    name: '',
    email: '',
    password: ''
})

function registerUser() {
    Inertia.post('/register/success', form.value)
}
</script>

<style lang="scss" scoped>

</style>
