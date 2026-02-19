<script setup lang="ts">
import { onMounted } from 'vue';
import { useRoute } from 'vue-router';
import { useProgramasStore } from '../stores/programas.store';

const route = useRoute();
const store = useProgramasStore();

onMounted(() => {
  store.fetchProgramaDetalle(route.params.slug as string);
});
</script>

<template>
  <div v-if="store.loading">Cargando...</div>

  <div v-else-if="store.programaActual">
    <h1>{{ store.programaActual.nombre }}</h1>
    <p>{{ store.programaActual.descripcion }}</p>
    <p>Municipio: {{ store.programaActual.municipio }}</p>
    <p>Nivel: {{ store.programaActual.nivel }}</p>
    <p>Cupos disponibles: {{ store.programaActual.cupos_disponibles }}</p>
    <router-link :to="`/preinscripcion/${store.programaActual.id}`">Preinscribirse</router-link>
  </div>

  <div v-else>Programa no encontrado</div>
</template>
<script setup lang="ts">
import { onMounted } from 'vue';
import { useRoute } from 'vue-router';
import { useProgramasStore } from '../stores/programas.store';

const route = useRoute();
const store = useProgramasStore();

onMounted(() => {
  store.fetchProgramaDetalle(route.params.slug as string);
});
</script>

<template>
  <div v-if="store.loading">Cargando...</div>

  <div v-else-if="store.programaActual">
    <h1>{{ store.programaActual.nombre }}</h1>
    <p>{{ store.programaActual.descripcion }}</p>

    <router-link
      :to="`/preinscripcion/${store.programaActual.id}`"
    >
      Preinscribirse
    </router-link>
  </div>

  <div v-else>
    Programa no encontrado
  </div>
</template>
