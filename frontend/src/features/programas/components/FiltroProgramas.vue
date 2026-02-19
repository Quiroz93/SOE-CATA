<template>
  <form class="mb-6 flex gap-2 items-center" @submit.prevent="$emit('filtrar', filtro)">
    <input
      v-model="filtro"
      type="text"
      placeholder="Buscar por nombre..."
      class="border border-gray-300 rounded px-3 py-2 w-full max-w-xs focus:outline-none focus:ring-2 focus:ring-[#00843D]"
    />
    <button
      type="submit"
      class="bg-[#00843D] text-white px-4 py-2 rounded font-semibold hover:bg-[#006b31] transition"
    >
      Filtrar
    </button>
  </form>
</template>

<script setup lang="ts">
import { ref } from 'vue';

const filtro = ref('');
</script>
