<template>
    <div :class="cnFileScreen('table')">
        <div :class="cnFileScreen('table-thead')">
            <div :class="cnFileScreen('table-thead_tr')">
                <div :class="cnFileScreen('table-thead_th')">Название</div>
                <div :class="cnFileScreen('table-thead_th')">Размер</div>
                <div :class="cnFileScreen('table-thead_th')">Дата</div>
                <div :class="cnFileScreen('table-thead_th')">Действия</div>
            </div>
        </div>
        <div :class="cnFileScreen('table-tbody')" v-for="file in model.file">
            <div :class="cnFileScreen('table-tbody_tr')">
                <div v-if="file.name.length >= 15" :class="cnFileScreen('table-tbody_td')">
                    {{ file.name.substring(0, file.name.length - file.name.length + 15) }}...
                </div>
                <div v-else :class="cnFileScreen('table-tbody_td')">{{ file.name }}</div>
                <div :class="cnFileScreen('table-tbody_td')">{{ formatBytes(file.size) }}</div>
                <div :class="cnFileScreen('table-tbody_td')">{{ formatDateTime(file.updated_at) }}</div>
                <div :class="cnFileScreen('table-tbody_td')">
                    <button :class="cnFileScreen('table-tbody_td_load')" @click="deleteFile(file.id)" type="submit">
                        Установить
                    </button>
                    <button :class="cnFileScreen('table-tbody_td_del')" @click="deleteFile(file.id)" type="submit">
                        Удалить
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import {cnFileScreen} from "./file-screen.const"
import {fileModel} from "./file-screen.model"
import {Inertia} from '@inertiajs/inertia'

const model = fileModel();

function formatBytes(a, b = 2) {
    if (!+a) return "0 Bytes";
    const c = 0 > b ? 0 : b, d = Math.floor(Math.log(a) / Math.log(1024));
    return `${parseFloat((a / Math.pow(1024, d)).toFixed(c))} ${["Байт", "Кб", "Мб", "Гб", "Тб", "Пб", "Еб", "Зб", "Уб"][d]}`
}

function formatDateTime(dateTimeString) {
    const date = new Date(dateTimeString);
    const day = date.getDate();
    const month = date.getMonth() + 1;
    const year = date.getFullYear();
    const hours = date.getHours();
    const minutes = date.getMinutes();

    const formattedDate = `${day < 10 ? '0' + day : day}.${month < 10 ? '0' + month : month}.${year}`;
    const formattedTime = `${hours < 10 ? '0' + hours : hours}:${minutes < 10 ? '0' + minutes : minutes}`;

    return `${formattedDate} ${formattedTime}`;
}

function deleteFile(id) {
    if (confirm('Вы уверенны?')) {
        Inertia.delete(`file/${id}`, id)
    }
}
</script>

<style lang="scss" scoped>
.file-screen {
    &__table {
        margin: 0 200px 100px;
        border-collapse: collapse;

        border: 2px solid rgb(24, 24, 24);
        border-radius: 10px;

        &-thead {
            display: flex;

            border-bottom: 2px solid rgb(24, 24, 24);

            &_tr {
                display: flex;
            }

            &_th {
                display: flex;
                align-items: center;
                justify-content: center;

                width: 260px;
                height: 52px;

                color: rgb(233, 239, 255);
                font-size: 24px;
                font-weight: 600;
                line-height: 29px;

                border-left: 1px solid rgb(236, 241, 255);
                border-right: 1px solid rgb(236, 241, 255);
                background: rgb(0, 67, 164);

                &:first-child {
                    border-right: 1px solid rgb(236, 241, 255);
                    border-left: 0;

                    border-radius: 10px 0 0 0;
                }

                &:last-child {
                    border-left: 1px solid rgb(236, 241, 255);
                    border-right: 0;

                    border-radius: 0 10px 0 0;
                }
            }
        }

        &-tbody {
            display: flex;

            border-bottom: 2px solid rgb(24, 24, 24);

            &:last-child {
                border-bottom: 0;
            }

            &_tr {
                display: flex;
            }

            &_td {
                display: flex;
                align-items: center;
                justify-content: center;

                width: 260px;
                height: 53px;

                text-align: center;

                color: rgb(24, 24, 24);
                font-size: 24px;
                font-weight: 400;
                line-height: 29px;

                border-right: 1px solid rgb(24, 24, 24);
                border-left: 1px solid rgb(24, 24, 24);

                &:first-child {
                    border-right: 1px solid rgb(24, 24, 24);
                    border-left: 0;
                }

                &:last-child {
                    border-left: 1px solid rgb(24, 24, 24);
                    border-right: 0;
                }

                &_load {
                    width: 130px;
                    height: 27px;

                    color: rgb(236, 241, 255);
                    font-size: 18px;
                    font-weight: 600;
                    line-height: 22px;

                    background: rgb(43, 164, 0);

                    border: 0;
                }

                &_del {
                    width: 103px;
                    height: 27px;

                    margin: 0 0 0 7px;

                    color: rgb(236, 241, 255);
                    font-size: 18px;
                    font-weight: 600;
                    line-height: 22px;

                    background: rgb(164, 10, 0);

                    border: 0;
                }
            }
        }
    }
}
</style>
