<template>
  <div class="p-6">
    <h1 class="text-2xl font-bold mb-4" tabindex="0">Ofertas Disponibles</h1>
    <div v-if="loading" class="text-blue-500" role="status">Cargando ofertas...</div>
    <div v-if="error" class="text-red-500" role="alert">{{ error }}</div>
    <div v-if="ofertas.length === 0 && !loading" class="text-gray-500" role="status">No hay ofertas disponibles.</div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <OfertaCard v-for="oferta in ofertasDisponibles" :key="oferta.id" :oferta="oferta" />
    </div>
  </div>
</template>

<script lang="ts" setup>
import { onMounted } from 'vue';
import { useOfertasStore } from '../store/ofertas.store';
import OfertaCard from '../components/OfertaCard.vue';

const store = useOfertasStore();
const { ofertas, loading, error, ofertasDisponibles } = store;

onMounted(() => {
  store.fetchOfertas();
});
</script>
