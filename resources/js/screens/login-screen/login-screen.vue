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
            <button type="submit" @click="timeoutFunction" :disabled="!isFormValid">Войти</button>
            <div class="error-message" v-if="showErrorMessage">
                {{ showMessage() }}
            </div>
        </form>
    </div>
</template>

<script setup lang="ts">
import {cnLoginScreen} from "./login-screen.const"
import {defineProps, ref, computed} from 'vue'
import {Inertia} from '@inertiajs/inertia'

const form = ref({
    email: '',
    password: ''
})

let errorMessage = ref('');
let showErrorMessage = ref(false);

const isFormValid = computed(() => {
    return form.value.email.length > 5 && form.value.password.length >= 5;
});

function loginUser() {
    if (isFormValid.value) {
        showErrorMessage.value = false
        Inertia.post('/login/success', form.value);
    }
}

function showMessage() {
    return errorMessage.value = 'Неверный логин или пароль'
}

function timeoutFunction() {
    return setTimeout(() => {
        showErrorMessage.value = true
    }, 2000);
}
</script>

<style lang="scss" scoped>

</style>
