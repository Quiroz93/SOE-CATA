<script setup lang="ts">
import { useRoute } from 'vue-router';
import PreinscripcionForm from '../components/PreinscripcionForm.vue';

import { ref, onMounted } from 'vue';
import { programasService } from '@/features/programas/services/programas.service';

const route = useRoute();
const programaId = Number(route.params.programaId);
const programaNombre = ref('');

onMounted(async () => {
  if (programaId) {
    try {
      const { data } = await programasService.listar();
      const programa = data.find((p: any) => p.id === programaId);
      programaNombre.value = programa ? programa.nombre : '';
    } catch (e) {
      programaNombre.value = '';
    }
  }
});
</script>

<template>
  <div>
    <h1>Preinscripción</h1>
    <PreinscripcionForm :programa-id="programaId" :programa-nombre="programaNombre" />
  </div>
</template>
