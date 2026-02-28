<template>
  <div class="p-6">
    <h1 class="text-2xl font-bold mb-4" tabindex="0">Ofertas Disponibles</h1>
    <div>Ofertas cargadas: {{ store.ofertas.length }}</div>
    <div v-if="store.loading" class="text-blue-500" role="status">Cargando ofertas...</div>
    <div v-if="store.error" class="text-red-500" role="alert">{{ store.error }}</div>
    <div v-if="store.ofertas.length === 0 && !store.loading" class="text-gray-500" role="status">No hay ofertas disponibles.</div>
    <div v-else-if="store.ofertasDisponibles.length > 0 && store.ofertasDisponibles.every(o => !o.programa || !o.programa.nombre)" class="text-yellow-600" role="status">
      Las ofertas no tienen programas asociados.
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <OfertaCard v-for="oferta in store.ofertasDisponibles" :key="oferta.id" :oferta="oferta" />
    </div>
  </div>
</template>

<script lang="ts" setup>
import { onMounted } from 'vue';
import { useOfertasStore } from '../store/ofertas.store';
import OfertaCard from '../components/OfertaCard.vue';

const store = useOfertasStore();

onMounted(() => {
  store.fetchOfertas();
});
</script>
