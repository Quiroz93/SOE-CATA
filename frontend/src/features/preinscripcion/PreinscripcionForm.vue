<template>
  <div class="max-w-xl mx-auto py-8">
    <h2 class="text-2xl font-bold mb-4" tabindex="0">Formulario de Preinscripción</h2>
    <form @submit.prevent="onSubmit">
      <div class="mb-4">
        <label for="tipo_documento" class="block mb-1 font-semibold">Tipo de documento</label>
        <input id="tipo_documento" v-model="form.tipo_documento" type="text" class="input input-bordered w-full" required />
        <span v-if="store.errors.tipo_documento" class="text-red-600">{{ store.errors.tipo_documento[0] }}</span>
      </div>
      <div class="mb-4">
        <label for="numero_documento" class="block mb-1 font-semibold">Número de documento</label>
        <input id="numero_documento" v-model="form.numero_documento" type="text" class="input input-bordered w-full" required />
        <span v-if="store.errors.numero_documento" class="text-red-600">{{ store.errors.numero_documento[0] }}</span>
      </div>
      <div class="mb-4">
        <label for="nombres" class="block mb-1 font-semibold">Nombres</label>
        <input id="nombres" v-model="form.nombres" type="text" class="input input-bordered w-full" required />
        <span v-if="store.errors.nombres" class="text-red-600">{{ store.errors.nombres[0] }}</span>
      </div>
      <div class="mb-4">
        <label for="apellidos" class="block mb-1 font-semibold">Apellidos</label>
        <input id="apellidos" v-model="form.apellidos" type="text" class="input input-bordered w-full" required />
        <span v-if="store.errors.apellidos" class="text-red-600">{{ store.errors.apellidos[0] }}</span>
      </div>
      <div class="mb-4">
        <label for="email" class="block mb-1 font-semibold">Correo electrónico</label>
        <input id="email" v-model="form.email" type="email" class="input input-bordered w-full" required />
        <span v-if="store.errors.email" class="text-red-600">{{ store.errors.email[0] }}</span>
      </div>
      <div class="mb-4">
        <label for="telefono" class="block mb-1 font-semibold">Teléfono</label>
        <input id="telefono" v-model="form.telefono" type="text" class="input input-bordered w-full" required />
        <span v-if="store.errors.telefono" class="text-red-600">{{ store.errors.telefono[0] }}</span>
      </div>
      <button type="submit" class="btn btn-primary" :disabled="loading" :aria-busy="loading ? 'true' : 'false'">
        <span v-if="loading">Enviando...</span>
        <span v-else>Enviar</span>
      </button>
    </form>
    <div v-if="success" class="mt-4 text-green-600" role="status">¡Preinscripción enviada correctamente!</div>
    <div v-if="store.errors.general" class="mt-4 text-red-600" role="alert">{{ store.errors.general[0] }}</div>
    <div v-if="error" class="mt-4 text-red-600" role="alert">{{ error }}</div>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import { useRoute } from 'vue-router';
import { usePreinscripcionStore } from '@/features/preinscripcion/stores/preinscripcion.store';
import type { PreinscripcionPayload } from '@/features/preinscripcion/types/preinscripcion.types';

const route = useRoute();
const store = usePreinscripcionStore();
const oferta_programa_id = Number(route.params.id);
const form = ref<PreinscripcionPayload>({
  oferta_programa_id,
  tipo_documento: '',
  numero_documento: '',
  nombres: '',
  apellidos: '',
  email: '',
  telefono: ''
});
const loading = ref(false);
const success = ref(false);
const error = ref<string | null>(null);

const onSubmit = async () => {
  success.value = false;
  error.value = null;
  loading.value = true;
  try {
    await store.enviar(form.value);
    success.value = true;
  } catch (e: any) {
    error.value = e?.message || 'Error al enviar preinscripción';
  } finally {
    loading.value = false;
  }
};
</script>

<style scoped>
.input {
  border: 1px solid #d1d5db;
  border-radius: 0.375rem;
  padding: 0.5rem 0.75rem;
}
.btn {
  background-color: #2563eb;
  color: #fff;
  padding: 0.5rem 1rem;
  border-radius: 0.375rem;
  transition: background 0.2s;
}
.btn:hover {
  background-color: #1d4ed8;
}
</style>
