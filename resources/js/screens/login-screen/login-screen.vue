<template>
    <div :class="cnLoginScreen('')">
        <h1>Вход пользователя</h1>
        <form @submit.prevent="loginUser">
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" v-model="form.email" required>
            </div>
            <div>
                <label for="password">Пароль:</label>
                <input type="password" id="password" v-model="form.password" required>
            </div>
            <button type="submit">Войти</button>
        </form>
    </div>
</template>

<script setup lang="ts">
import {cnLoginScreen} from "./login-screen.const"
import {defineProps, ref} from 'vue'
import {useStore} from 'pinia'
import {Inertia} from '@inertiajs/inertia'

const form = ref({
    email: '',
    password: ''
})

function loginUser() {
    console.log('work')
    Inertia.post('/login/success', form.value);
}
</script>

<style lang="scss" scoped>

</style>
