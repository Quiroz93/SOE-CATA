<template>
  <div class="p-4">
    <!-- Estado vacío -->
    <div v-if="empty" class="text-gray-500 text-center">No hay programas disponibles.</div>
    <!-- Estado de carga -->
    <div v-else-if="loading" class="text-blue-500 text-center">Cargando programas...</div>
    <!-- Estado de error -->
    <div v-else-if="error" class="text-red-500 text-center">Error al cargar programas.</div>
    <!-- Lista de programas -->
    <ul v-else>
      <!-- Aquí irá la lista -->
      <li v-for="programa in programas" :key="programa.id" class="mb-2">
        {{ programa.nombre }}
      </li>
    </ul>
  </div>
</template>
<script setup lang="ts">
import { ref, onMounted } from 'vue';
import { programasService } from './services/programas.service';

const loading = ref(true);
const error = ref(false);
const empty = ref(false);
const programas = ref<any[]>([]);

onMounted(async () => {
  try {
    const { data } = await programasService.listar();
    programas.value = data;
    empty.value = !data.length;
  } catch (e) {
    error.value = true;
  } finally {
    loading.value = false;
  }
});
</script>
