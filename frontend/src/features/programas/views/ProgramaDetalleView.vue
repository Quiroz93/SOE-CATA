<script setup lang="ts">
import { onMounted } from 'vue';
import { useRoute } from 'vue-router';
import { useProgramasStore } from '../stores/programas.store';
import $style from './ProgramaDetalleView.module.css';

const route = useRoute();
const store = useProgramasStore();

onMounted(() => {
  store.fetchProgramaDetalle(route.params.slug as string);
});
</script>

<template>
  <div :class="$style.root">
    <div v-if="store.loading" :class="$style.loading">Cargando...</div>

    <div v-else-if="store.programaActual">
      <h1 :class="$style.titulo">{{ store.programaActual.nombre }}</h1>
      <p :class="$style.descripcion">{{ store.programaActual.descripcion }}</p>
      <p :class="$style.info">Municipio: <span>{{ store.programaActual.municipio }}</span></p>
      <p :class="$style.info">Nivel: <span>{{ store.programaActual.nivel }}</span></p>
      <p :class="$style.cupos">Cupos disponibles: {{ store.programaActual.cupos_disponibles }}</p>
      <router-link :to="`/preinscripcion/${store.programaActual.id}`" :class="$style.botonPreinscripcion">Preinscribirse</router-link>
    </div>

    <div v-else :class="$style.noPrograma">Programa no encontrado</div>
  </div>
</template>