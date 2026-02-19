<script setup lang="ts">
import { onMounted } from 'vue';
import { useProgramasStore } from '../stores/programas.store';
import ProgramaCard from '../components/ProgramaCard.vue';
import FiltroProgramas from '../components/FiltroProgramas.vue';

const store = useProgramasStore();

function onFiltrar(filtro: string) {
  store.fetchProgramas(filtro ? { nombre: filtro } : undefined);
}

onMounted(() => {
  store.fetchProgramas();
});
</script>

<template>
  <div>
    <h1>Programas de Formación</h1>
    <FiltroProgramas @filtrar="onFiltrar" />
    <div v-if="store.loading">Cargando...</div>
    <div v-else>
      <div v-if="store.programas.length === 0">No hay programas.</div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <ProgramaCard v-for="programa in store.programas" :key="programa.id" :programa="programa" />
      </div>
      <div v-if="store.meta.total" class="mt-4">Total: {{ store.meta.total }}</div>
    </div>
  </div>
</template>
