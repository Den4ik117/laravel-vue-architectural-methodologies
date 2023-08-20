<template>
    <form @submit.prevent="onSubmit">
        <label for="name">Название задачи:</label>
        <input id="name" type="text" v-model="form.name" required>

        <label for="description">Описание задачи:</label>
        <textarea id="description" rows="3" v-model="form.description" required></textarea>

        <button type="submit">Сохранить</button>

        <div v-if="error">{{ error }}</div>
    </form>
</template>

<script setup>
import { reactive, ref } from 'vue';
import { useTasks } from '@/api/useTasks';

const { store } = useTasks();

const error = ref('');

const form = reactive({
    name: '',
    description: '',
});

const clearForm = () => {
    form.name = '';
    form.description = '';
}

const onSubmit = () => {
    error.value = '';

    store(form, () => {
        clearForm();
    }, (e) => {
        error.value = e?.response?.data?.message || 'При создании задачи произошла неизвестная ошибка';
    });
};
</script>
