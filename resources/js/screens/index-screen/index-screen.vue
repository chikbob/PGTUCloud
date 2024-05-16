<template>
    <div :class="cnIndexScreen('')">
        <IndexScreenHeader></IndexScreenHeader>
        <IndexScreenForm></IndexScreenForm>
        <IndexScreenText></IndexScreenText>
    </div>
</template>

<script setup lang="ts">
import {cnIndexScreen} from "./index-screen.const"
import IndexScreenHeader from "../index-screen/index-screen__header.vue"
import IndexScreenForm from "../index-screen/index-screen__form.vue"
import IndexScreenText from "../index-screen/index-screen__text.vue"
</script>

<style lang="scss" scoped>
.index-screen {
    display: flex;
    flex-direction: column;
    align-items: center;
}
</style>
