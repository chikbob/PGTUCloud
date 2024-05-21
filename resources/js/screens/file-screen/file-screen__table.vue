<template>
    <div :class="cnFileScreen('table-empty')" v-if="model.file.length <= 0">
        Список пуст!
    </div>
    <div :class="cnFileScreen('table')" v-else>
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
                    <button :class="cnFileScreen('table-tbody_td_load')" @click="soon" type="submit">
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
import Swal from 'sweetalert2/dist/sweetalert2.js'

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
    Swal.fire({
        title: "Вы уверены?",
        text: "Вы не сможете это вернуть!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Да, удалить!",
        cancelButtonText: "Отмена",
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: "Удалено!",
                text: "Ваш файл удален.",
                icon: "success"
            });
            Inertia.delete(`file/${id}`, id)
        }
    });
}

function soon() {
    Swal.fire({
        title: "Что произошло?",
        text: "Эта функция еще недоступна!",
        icon: "question"
    });
}
</script>

<style lang="scss" scoped>
@import "../../../../public/sass/media_mixin.scss";

.file-screen {
    @include _1250 {

    }

    @include _1170 {
        &__table {
            margin: 0 120px 100px !important;

            &-empty {
                margin: 100px 0 450px;

                font-size: 34px;
            }

            &-thead {
                display: flex;

                &_tr {
                    display: flex;
                }

                &_th {
                    display: flex;
                    align-items: center;
                    justify-content: center;

                    width: 200px !important;
                    height: 52px;

                    font-size: 24px;
                    line-height: 29px;
                }
            }

            &-tbody {
                display: flex;

                &_tr {
                    display: flex;
                }

                &_td {
                    display: flex;
                    align-items: center;
                    justify-content: center;

                    width: 200px !important;
                    height: 53px;

                    text-align: center;

                    font-size: 20px !important;
                    line-height: 29px;

                    &_load {
                        width: 100px !important;
                        height: 27px;

                        font-size: 14px !important;
                        line-height: 22px;
                    }

                    &_del {
                        width: 80px !important;
                        height: 27px;

                        margin: 0 0 0 7px;

                        font-size: 14px !important;
                        line-height: 22px;
                    }
                }
            }
        }
    }

    @include _979 {
        &__table {
            margin: 0 120px 100px !important;

            &-thead {
                display: flex;

                &_tr {
                    display: flex;
                }

                &_th {
                    display: flex;
                    align-items: center;
                    justify-content: center;

                    width: 170px !important;
                    height: 52px;

                    font-size: 20px !important;
                    line-height: 29px;
                }
            }

            &-tbody {
                display: flex;

                &_tr {
                    display: flex;
                }

                &_td {
                    display: flex;
                    align-items: center;
                    justify-content: center;

                    width: 170px !important;
                    height: 53px;

                    text-align: center;

                    font-size: 16px !important;
                    line-height: 29px;

                    &_load {
                        width: 80px !important;
                        height: 27px;

                        font-size: 12px !important;
                        line-height: 22px;
                    }

                    &_del {
                        width: 70px !important;
                        height: 27px;

                        margin: 0 0 0 7px;

                        font-size: 12px !important;
                        line-height: 22px;
                    }
                }
            }
        }
    }

    @include _768 {
        &__table {
            margin: 0 120px 100px !important;

            &-thead {
                display: flex;

                &_tr {
                    display: flex;
                }

                &_th {
                    display: flex;
                    align-items: center;
                    justify-content: center;

                    width: 150px !important;
                    height: 52px;

                    font-size: 18px !important;
                    line-height: 29px;
                }
            }

            &-tbody {
                display: flex;

                &_tr {
                    display: flex;
                }

                &_td {
                    display: flex;
                    align-items: center;
                    justify-content: center;

                    width: 150px !important;
                    height: 53px;

                    text-align: center;

                    font-size: 14px !important;
                    line-height: 29px;

                    &_load {
                        width: 70px !important;
                        height: 27px;

                        font-size: 10px !important;
                        line-height: 22px;
                    }

                    &_del {
                        width: 60px !important;
                        height: 27px;

                        margin: 0 0 0 7px;

                        font-size: 10px !important;
                        line-height: 22px;
                    }
                }
            }
        }
    }

    @include _600 {
        &__table {
            margin: 0 120px 100px !important;

            &-thead {
                display: flex;

                &_tr {
                    display: flex;
                }

                &_th {
                    display: flex;
                    align-items: center;
                    justify-content: center;

                    width: 130px !important;
                    height: 52px;

                    font-size: 18px !important;
                    line-height: 29px;
                }
            }

            &-tbody {
                display: flex;

                &_tr {
                    display: flex;
                }

                &_td {
                    display: flex;
                    align-items: center;
                    justify-content: center;

                    width: 130px !important;
                    height: 53px;

                    text-align: center;

                    font-size: 12px !important;
                    line-height: 29px;

                    &_load {
                        width: 60px !important;
                        height: 27px;

                        font-size: 8px !important;
                        line-height: 22px;
                    }

                    &_del {
                        width: 50px !important;
                        height: 27px;

                        margin: 0 0 0 7px;

                        font-size: 8px !important;
                        line-height: 22px;
                    }
                }
            }
        }
    }

    @include _480 {
        &__table {
            margin: 0 120px 100px !important;

            &-thead {
                display: flex;

                &_tr {
                    display: flex;
                }

                &_th {
                    display: flex;
                    align-items: center;
                    justify-content: center;

                    width: 90px !important;
                    height: 52px;

                    font-size: 14px !important;
                    line-height: 29px;
                }
            }

            &-tbody {
                display: flex;

                &_tr {
                    display: flex;
                }

                &_td {
                    display: flex;
                    align-items: center;
                    justify-content: center;

                    width: 90px !important;
                    height: 53px;

                    text-align: center;

                    font-size: 9px !important;
                    line-height: 29px;

                    &_load {
                        width: 43px !important;
                        height: 23px !important;

                        font-size: 5px !important;
                        line-height: 22px;
                    }

                    &_del {
                        width: 32px !important;
                        height: 23px !important;

                        margin: 0 0 0 7px;

                        font-size: 5px !important;
                        line-height: 22px;
                    }
                }
            }
        }
    }


    &__table {
        margin: 0 200px 100px;
        border-collapse: collapse;

        border: 2px solid rgb(24, 24, 24);
        border-radius: 10px;

        &-empty {
            margin: 100px 0 450px;

            font-size: 34px;
        }

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
