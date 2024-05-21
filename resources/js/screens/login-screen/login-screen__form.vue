<template>
    <form :class="cnLoginScreen('form')" @submit.prevent="loginUser">
        <div :class="cnLoginScreen('form-error')" class="error-message" v-if="showErrorMessage">
            {{ showMessage() }}
        </div>
        <div :class="cnLoginScreen('form-email')">
            <label :class="cnLoginScreen('form-email_label')" for="email">Почта:</label>
            <input :class="cnLoginScreen('form-email_input')" type="email" id="email" v-model="form.email" required>
        </div>
        <div :class="cnLoginScreen('form-password')">
            <label :class="cnLoginScreen('form-password_label')" for="password">Пароль:</label>
            <input :class="cnLoginScreen('form-password_input')" type="password" id="password"
                   v-model="form.password" required>
        </div>
        <button :class="cnLoginScreen('form-submit')" type="submit" @click="timeoutFunction"
                :disabled="!isFormValid">Войти
        </button>
    </form>
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
    return form.value.email.length > 6 && form.value.password.length >= 6;
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
@import "../../../../public/sass/media_mixin.scss";

.login-screen {
    @include _1570 {

    }

    @include _1250 {

    }

    @include _1170 {

    }

    @include _979 {

    }

    @include _768 {
        &__form {
            display: flex;
            flex-direction: column;
            align-items: center;

            color: rgb(24, 24, 24);
            font-size: 22px !important;
            font-weight: 600;
            line-height: 31px;

            &-error {
                color: rgb(213, 64, 64);

                margin: 0 0 15px
            }

            &-email {
                display: flex;
                align-items: center;

                margin: 0 0 17px;

                &_label {
                    display: flex;
                    align-items: center;

                    width: 130px !important;
                    height: 50px;
                }

                &_input {
                    width: 300px !important;
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

                &_label {
                    display: flex;
                    align-items: center;
                    width: 130px !important;
                    height: 50px;
                }

                &_input {
                    width: 300px !important;
                    height: 50px;

                    padding: 0 0 0 10px;
                }
            }

            &-submit {
                width: 220px;
                height: 55px;

                margin: 80px 0 300px !important;

                font-size: 20px;
                font-weight: 400;
                line-height: 24px;
            }
        }
    }

    @include _600 {

    }

    @include _480 {
        &__form {
            display: flex;
            flex-direction: column;
            align-items: center;

            color: rgb(24, 24, 24);
            font-size: 20px !important;
            font-weight: 600;
            line-height: 31px;

            &-error {
                color: rgb(213, 64, 64);

                margin: 0 0 15px
            }

            &-email {
                display: flex;
                flex-direction: column;
                align-items: flex-start !important;

                margin: 0 0 17px;

                &_label {
                    display: flex;
                    align-items: center;

                    width: 130px !important;
                    height: 50px;
                }

                &_input {
                    width: 300px !important;
                    height: 50px;

                    padding: 0 0 0 10px;

                    border: 1px solid rgb(24, 24, 24);
                    border-radius: 5px;

                    background: rgb(236, 241, 255);
                }
            }

            &-password {
                display: flex;
                flex-direction: column;
                align-items: flex-start !important;

                &_label {
                    display: flex;
                    align-items: center;
                    width: 130px !important;
                    height: 50px;
                }

                &_input {
                    width: 300px !important;
                    height: 50px;

                    padding: 0 0 0 10px;
                }
            }

            &-submit {
                width: 220px;
                height: 55px;

                margin: 80px 0 300px !important;

                font-size: 20px;
                font-weight: 400;
                line-height: 24px;
            }
        }
    }

    @include _350 {
        &__form {
            display: flex;
            flex-direction: column;
            align-items: center;

            color: rgb(24, 24, 24);
            font-size: 16px !important;
            font-weight: 600;
            line-height: 31px;

            &-error {
                color: rgb(213, 64, 64);

                margin: 0 0 15px
            }

            &-email {
                display: flex;
                flex-direction: column;
                align-items: flex-start !important;

                margin: 0 0 17px;

                &_label {
                    display: flex;
                    align-items: center;

                    width: 130px !important;
                    height: 50px;
                }

                &_input {
                    width: 250px !important;
                    height: 50px;

                    padding: 0 0 0 10px;

                    border: 1px solid rgb(24, 24, 24);
                    border-radius: 5px;

                    background: rgb(236, 241, 255);
                }
            }

            &-password {
                display: flex;
                flex-direction: column;
                align-items: flex-start !important;

                &_label {
                    display: flex;
                    align-items: center;
                    width: 130px !important;
                    height: 50px;
                }

                &_input {
                    width: 250px !important;
                    height: 50px;

                    padding: 0 0 0 10px;
                }
            }

            &-submit {
                width: 220px;
                height: 55px;

                margin: 80px 0 300px !important;

                font-size: 20px;
                font-weight: 400;
                line-height: 24px;
            }
        }
    }

    &__header {
        display: flex;
        justify-content: center;

        width: 543px;
        height: 43px;

        color: rgb(24, 24, 24);
        font-size: 32px;
        font-weight: 600;
        line-height: 38px;

        margin: 53px 0;
    }

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
