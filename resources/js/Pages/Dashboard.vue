<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
// Vue deps
import { computed, defineProps } from 'vue'

const props = defineProps(['auth']);
const user = computed(() => props.auth.user)

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard of <span class="text-indigo-400">{{ user.name }}</span>.
            </h2>
        </template>

        <div class="lg:py-12 xl:py-12 md:py-12 py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Welcome />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
