<template>
    <div :class="cnRegisterScreen('form-error')" class="error-message" v-if="showErrorMessage">
        {{ showMessage() }}
    </div>
    <form :class="cnRegisterScreen('form')" @submit.prevent="registerUser">
        <div :class="cnRegisterScreen('form-name')">
            <label :class="cnRegisterScreen('form-name_label')" for="name">Имя:</label>
            <input :class="cnRegisterScreen('form-name_input')" type="text" id="name" v-model="form.name" required>
        </div>
        <div :class="cnRegisterScreen('form-email')">
            <label :class="cnRegisterScreen('form-email_label')" for="email">Email:</label>
            <input :class="cnRegisterScreen('form-email_input')" type="email" id="email" v-model="form.email"
                   required>
        </div>
        <div :class="cnRegisterScreen('form-password')">
            <label :class="cnRegisterScreen('form-password_label')" for="password">Пароль:</label>
            <input :class="cnRegisterScreen('form-password_input')" type="password" id="password"
                   v-model="form.password" required>
        </div>
        <div :class="cnRegisterScreen('form-checkPassword')">
            <label :class="cnRegisterScreen('form-checkPassword_label')" for="checkPassword">Повторите
                пароль:</label>
            <input :class="cnRegisterScreen('form-checkPassword_input')" type="password" id="checkPassword"
                   v-model="form.checkPassword" required>
        </div>
        <button :class="cnRegisterScreen('form-submit')" type="submit" :disabled="!isFormValid">Регистрация</button>
    </form>
</template>

<script setup lang="ts">
import {cnRegisterScreen} from "./register-screen.const"
import {computed, defineProps, ref} from 'vue'
import {Inertia} from '@inertiajs/inertia'

const form = ref({
    name: '',
    email: '',
    password: '',
    checkPassword: ''
})

let errorMessage = ref('');
let showErrorMessage = ref(false);

const isFormValid = computed(() => {
    return form.value.email.length > 6 && form.value.password.length >= 6 && form.value.password == form.value.checkPassword;
});

function showMessage() {
    return errorMessage.value = 'Неверные данные!'
}

function registerUser() {
    if (isFormValid.value) {
        showErrorMessage.value = false
        Inertia.post('/register/success', form.value)
    }
}
</script>

<style lang="scss" scoped>
.register-screen {
    display: flex;
    flex-direction: column;
    align-items: center;

    &__form {
        display: flex;
        flex-direction: column;
        align-items: center;

        color: rgb(24, 24, 24);
        font-size: 26px;
        font-weight: 600;
        line-height: 31px;

        &-error {
            color: rgb(213, 64, 64);

            margin: 0 0 15px
        }

        &-name {
            display: flex;
            align-items: center;

            margin: 0 0 17px;

            &_label {
                display: flex;
                align-items: center;

                width: 150px;
                height: 50px;
            }

            &_input {
                width: 450px;
                height: 50px;

                padding: 0 0 0 10px;

                border: 1px solid rgb(24, 24, 24);
                border-radius: 5px;

                background: rgb(236, 241, 255);
            }
        }

        &-email {
            display: flex;
            align-items: center;

            margin: 0 0 17px;

            &_label {
                display: flex;
                align-items: center;

                width: 150px;
                height: 50px;
            }

            &_input {
                width: 450px;
                height: 50px;

                padding: 0 0 0 10px;

                border: 1px solid rgb(24, 24, 24);
                border-radius: 5px;

                background: rgb(236, 241, 255);
            }
        }

        &-password {
            display: flex;
            align-items: center;

            margin: 0 0 17px;

            &_label {
                display: flex;
                align-items: center;

                width: 150px;
                height: 50px;
            }

            &_input {
                width: 450px;
                height: 50px;

                padding: 0 0 0 10px;

                border: 1px solid rgb(24, 24, 24);
                border-radius: 5px;

                background: rgb(236, 241, 255);
            }
        }

        &-checkPassword {
            display: flex;
            align-items: center;

            margin: 0 0 17px;

            &_label {
                display: flex;
                align-items: center;

                width: 150px;
                height: 50px;
            }

            &_input {
                width: 450px;
                height: 50px;

                padding: 0 0 0 10px;

                border: 1px solid rgb(24, 24, 24);
                border-radius: 5px;

                background: rgb(236, 241, 255);
            }
        }

        &-submit {
            width: 220px;
            height: 55px;

            margin: 52px 0 300px;

            color: rgb(24, 24, 24);
            font-size: 20px;
            font-weight: 400;
            line-height: 24px;

            border: 1px solid rgb(40, 52, 122);
            border-radius: 5px;

            background: rgb(236, 241, 255);
        }
    }
}
</style>
