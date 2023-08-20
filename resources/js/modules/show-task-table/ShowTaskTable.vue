<template>
    <ul v-if="tasks.length > 0">
        <li v-for="task in tasks" :key="task.id">{{ task.name }}</li>
    </ul>
    <span v-else>У вас нет ни одной задачи</span>
</template>

<script setup>
import { tasks } from '@/api/useTasks';
</script>
