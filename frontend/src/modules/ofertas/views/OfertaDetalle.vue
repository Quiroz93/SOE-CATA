<template>
  <div class="p-6">
    <div v-if="loading" class="text-blue-500">Cargando detalle...</div>
    <div v-if="error" class="text-red-500">{{ error }}</div>
    <div v-if="ofertaSeleccionada" class="bg-white rounded shadow p-4">
      <div class="font-bold text-lg">{{ ofertaSeleccionada.programa.nombre }}</div>
      <div class="text-sm text-gray-600">Red: {{ ofertaSeleccionada.programa.red_formacion.nombre }}</div>
      <div class="text-sm">Instructor: {{ ofertaSeleccionada.instructor.nombre }}</div>
      <div class="text-sm">Cupos: {{ ofertaSeleccionada.cupos }}</div>
      <div class="text-sm">Modalidad: {{ ofertaSeleccionada.modalidad }}</div>
      <div class="text-sm">Inicio: {{ ofertaSeleccionada.fecha_inicio }} | Fin: {{ ofertaSeleccionada.fecha_fin }}</div>
      <button
        class="mt-4 bg-green-600 text-white px-4 py-2 rounded"
        :disabled="ofertaSeleccionada.cupos === 0"
        @click="irAFormularioPreinscripcion"
      >
        Preinscribirme
      </button>
    </div>
  </div>
</template>

<script lang="ts" setup>
import { onMounted } from 'vue';
import { useRoute, useRouter } from 'vue-router';
import { useOfertasStore } from '../store/ofertas.store';

const route = useRoute();
const router = useRouter();
const store = useOfertasStore();
const { ofertaSeleccionada, loading, error } = store;

onMounted(() => {
  const id = Number(route.params.id);
  if (id) {
    store.fetchOfertaDetalle(id);
  }
});

function irAFormularioPreinscripcion() {
  if (ofertaSeleccionada && ofertaSeleccionada.id) {
    router.push({ name: 'preinscripcion', params: { id: ofertaSeleccionada.id } });
  }
}
</script>
