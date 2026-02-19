<template>
  <div class="p-4">
    <!-- Estado vacío -->
    <div v-if="empty" class="text-gray-500 text-center">Programa no encontrado.</div>
    <!-- Estado de carga -->
    <div v-else-if="loading" class="text-blue-500 text-center">Cargando programa...</div>
    <!-- Estado de error -->
    <div v-else-if="error" class="text-red-500 text-center">Error al cargar programa.</div>
    <!-- Detalle del programa -->
    <div v-else>
      <!-- Aquí irá el detalle -->
    </div>
  </div>
</template>
<script setup lang="ts">
import { ref, onMounted } from 'vue';
import { useRoute } from 'vue-router';
import { getProgramas } from '../../services/programas.service';

const loading = ref(true);
const error = ref(false);
const empty = ref(false);
const programa = ref<any | null>(null);
const route = useRoute();

onMounted(async () => {
  try {
    const programas = await getProgramas();
    programa.value = programas.find((p: any) => p.slug === route.params.slug);
    empty.value = !programa.value;
  } catch (e) {
    error.value = true;
  } finally {
    loading.value = false;
  }
});
</script>
