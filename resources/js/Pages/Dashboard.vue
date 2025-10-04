<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';

const token = ref('');

onMounted(async () => {
    try {
        const response = await fetch('http://127.0.0.1:8000/api/auth/me', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            },
            credentials: 'include',
        });

        const data = await response.json();
        token.value = localStorage.getItem('jwt_token') || 'Токен не найден';
    } catch (error) {
        token.value = 'Ошибка получения токена';
    }
});

function copyToken() {
    if(token.value && token.value !== 'Токен не найден' && token.value !== 'Ошибка получения токена'){
        navigator.clipboard.writeText(token.value)
            .then(() => alert('Токен скопирован!'))
            .catch(() => alert('Ошибка копирования токена'));
    } else {
        alert('Нет токена для копирования');
    }
}

function copyBearerToken() {
    const bearer = `bearer ${token.value}`;
    if(token.value && token.value !== 'Токен не найден' && token.value !== 'Ошибка получения токена'){
        navigator.clipboard.writeText(bearer)
            .then(() => alert('Bearer токен скопирован!'))
            .catch(() => alert('Ошибка копирования токена'));
    } else {
        alert('Нет токена для копирования');
    }
}
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">

                    <div class="p-6 text-gray-900 flex flex-col space-y-4">

                        <div>
                            токен для доступа к :
                            <a
                                href="/api/documentation"
                                target="_blank"
                                class="text-blue-600 underline"
                            >
                                Swagger
                            </a>
                        </div>
                        <div class="p-4 border rounded bg-gray-50 flex flex-col space-y-2 w-72">
                            <p>
                                Скопировать <span class="font-semibold">bearer</span> и токен:
                            </p>
                            <input
                                readonly
                                :value="`bearer ${token}`"
                                class="w-full p-2 rounded border border-gray-300 text-gray-900 bg-white focus:outline-none focus:ring-2 focus:ring-blue-600"
                            />
                            <button
                                @click="copyBearerToken"
                                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition"
                            >
                                Скопировать bearer токен
                            </button>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>
