<script setup lang="ts">
import { reactive } from 'vue';
import { usePreinscripcionStore } from '../stores/preinscripcion.store';

const props = defineProps<{
  programaId: number;
  programaNombre: string;
}>();

const store = usePreinscripcionStore();

const form = reactive({
  programa_id: props.programaId,
  nombres: '',
  apellidos: '',
  documento: '',
  correo: '',
  telefono: '',
  programa: props.programaNombre || ''
});

const submit = async () => {
  await store.enviar(form);
};
</script>

<template>
  <form @submit.prevent="submit">

    <div v-if="form.programa_id">
      <label>Programa:</label>
      <h2>{{ form.programa || props.programaNombre }}</h2>
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
      <input v-model="form.documento" placeholder="Documento" />
      <span v-if="store.errors.documento">
        {{ store.errors.documento[0] }}
      </span>
    </div>

    <div>
      <input v-model="form.correo" placeholder="Correo" />
      <span v-if="store.errors.correo">
        {{ store.errors.correo[0] }}
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
