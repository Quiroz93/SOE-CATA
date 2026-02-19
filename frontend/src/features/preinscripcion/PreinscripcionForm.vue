<template>
  <div class="max-w-xl mx-auto py-8">
    <h2 class="text-2xl font-bold mb-4">Formulario de Preinscripción</h2>
    <form @submit.prevent="onSubmit">
      <!-- Campos del formulario -->
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Nombre completo</label>
        <input v-model="form.nombre" type="text" class="input input-bordered w-full" required />
      </div>
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Correo electrónico</label>
        <input v-model="form.email" type="email" class="input input-bordered w-full" required />
      </div>
      <!-- Otros campos según contrato -->
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <div v-if="success" class="mt-4 text-green-600">¡Preinscripción enviada correctamente!</div>
    <div v-if="error" class="mt-4 text-red-600">{{ error }}</div>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import type { PreinscripcionRequest } from '../../types/api.types';
// import { usePreinscripcionService } from '../../services/preinscripcion.service';

const form = ref<PreinscripcionRequest>({ nombre: '', email: '' });
const success = ref(false);
const error = ref<string | null>(null);

// const { submitPreinscripcion } = usePreinscripcionService();

const onSubmit = async () => {
  success.value = false;
  error.value = null;
  try {
    // await submitPreinscripcion(form.value);
    success.value = true;
  } catch (e: any) {
    error.value = e?.message || 'Error al enviar preinscripción';
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
