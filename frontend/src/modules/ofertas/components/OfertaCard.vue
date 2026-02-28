<template>
  <div class="bg-white rounded shadow p-4 flex flex-col gap-2">
    <div v-if="oferta.programa && oferta.programa.nombre" class="font-bold text-lg">{{ oferta.programa.nombre }}</div>
    <div v-else class="text-yellow-600">Esta oferta no tiene programas asociados.</div>
    <div v-if="oferta.programa && oferta.programa.red_formacion" class="text-sm text-gray-600">Red: {{ oferta.programa.red_formacion.nombre }}</div>
    <div v-if="oferta.instructor && oferta.instructor.nombre" class="text-sm">Instructor: {{ oferta.instructor.nombre }}</div>
    <div v-if="oferta.cupos !== undefined" class="text-sm">Cupos: {{ oferta.cupos }}</div>
    <div v-if="oferta.modalidad !== undefined" class="text-sm">Modalidad: {{ oferta.modalidad }}</div>
    <div class="text-sm">Inicio: {{ oferta.fecha_inicio }} | Fin: {{ oferta.fecha_fin }}</div>
  </div>
</template>

<script lang="ts" setup>
import type { OfertaPrograma } from '../types/oferta.types';

defineProps<{ oferta: OfertaPrograma }>();
</script>
