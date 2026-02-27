<script setup lang="ts">
import { reactive } from 'vue';
import { usePreinscripcionStore } from '../stores/preinscripcion.store';

const props = defineProps<{
  ofertaProgramaId: number;
  programaNombre: string;
}>();

const store = usePreinscripcionStore();

const form = reactive({
  oferta_programa_id: props.ofertaProgramaId,
  tipo_documento: '',
  numero_documento: '',
  nombres: '',
  apellidos: '',
  email: '',
  telefono: ''
});

const submit = async () => {
  await store.enviar(form);
};
</script>

<template>
  <form @submit.prevent="submit">
    <div v-if="form.oferta_programa_id">
      <label>Oferta:</label>
      <h2>{{ props.programaNombre }}</h2>
    </div>
    <div>
      <input v-model="form.tipo_documento" placeholder="Tipo de documento" />
      <span v-if="store.errors.tipo_documento">
        {{ store.errors.tipo_documento[0] }}
      </span>
    </div>
    <div>
      <input v-model="form.numero_documento" placeholder="Número de documento" />
      <span v-if="store.errors.numero_documento">
        {{ store.errors.numero_documento[0] }}
      </span>
    </div>
    <div>
      <input v-model="form.nombres" placeholder="Nombres" />
      <span v-if="store.errors.nombres">
        {{ store.errors.nombres[0] }}
      </span>
    </div>
    <div>
      <input v-model="form.apellidos" placeholder="Apellidos" />
      <span v-if="store.errors.apellidos">
        {{ store.errors.apellidos[0] }}
      </span>
    </div>
    <div>
      <input v-model="form.email" placeholder="Correo electrónico" />
      <span v-if="store.errors.email">
        {{ store.errors.email[0] }}
      </span>
    </div>
    <div>
      <input v-model="form.telefono" placeholder="Teléfono" />
      <span v-if="store.errors.telefono">
        {{ store.errors.telefono[0] }}
      </span>
    </div>
    <div v-if="store.errors.general">
      {{ store.errors.general[0] }}
    </div>
    <button type="submit" :disabled="store.loading">
      {{ store.loading ? 'Enviando...' : 'Enviar' }}
    </button>
    <div v-if="store.successMessage">
      {{ store.successMessage }}
    </div>
  </form>
</template>
