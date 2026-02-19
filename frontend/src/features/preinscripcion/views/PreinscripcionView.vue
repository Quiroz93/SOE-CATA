<script setup lang="ts">
import { useRoute } from 'vue-router';
import PreinscripcionForm from '../components/PreinscripcionForm.vue';

const route = useRoute();
const programaId = Number(route.params.programaId);
</script>

<template>
  <div>
    <h1>Preinscripción</h1>
    <PreinscripcionForm :programa-id="programaId" />
  </div>
</template>
