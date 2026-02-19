<template>
  <div class="border rounded-lg p-6 shadow bg-white hover:shadow-lg transition flex flex-col h-full">
    <h2 class="text-xl font-bold mb-2 text-[#00843D] flex items-center gap-2">
      <span class="inline-block w-2 h-2 bg-[#00843D] rounded-full"></span>
      {{ programa.nombre }}
    </h2>
    <p class="mb-2 text-gray-700 flex-1">{{ programa.descripcion }}</p>
    <div class="text-xs text-gray-600 mb-1">🏙️ Municipio: <span class="font-semibold">{{ programa.municipio }}</span></div>
    <div class="text-xs text-gray-600 mb-1">🎓 Nivel: <span class="font-semibold">{{ programa.nivel }}</span></div>
    <div class="text-xs text-green-700 mb-2">👥 Cupos disponibles: <span class="font-semibold">{{ programa.cupos_disponibles }}</span></div>
    <router-link :to="`/programas/${programa.slug}`" class="mt-auto inline-block bg-[#00843D] text-white px-4 py-2 rounded font-semibold hover:bg-[#006b31] transition">Ver detalle</router-link>
  </div>
</template>

<script setup lang="ts">
import type { Programa } from '../types/programa.types';

defineProps<{ programa: Programa }>();
</script>
