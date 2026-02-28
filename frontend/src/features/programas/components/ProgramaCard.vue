
<template>
  <div :class="$style.programaCard">
    <!-- Título -->
    <h2 :class="$style.titulo">
      {{ programa.nombre }}
    </h2>

    <!-- Descripción -->
    <p :class="$style.descripcion">
      {{ programa.descripcion }}
    </p>

    <!-- Información del programa -->
    <div>
      <div style="display: flex; align-items: center; gap: 8px;">
        <span>📍</span>
        <span style="color: #00304D;">Municipio:</span>
        <span style="font-weight: 500;">{{ programa.municipio }}</span>
      </div>
      <div style="display: flex; align-items: center; gap: 8px;">
        <span>🎓</span>
        <span style="color: #00304D;">Nivel:</span>
        <span style="font-weight: 500;">{{ programa.nivel }}</span>
      </div>
      <div style="display: flex; align-items: center; gap: 8px;">
        <span>👥</span>
        <span style="color: #00304D;">Cupos disponibles:</span>
        <span :class="$style.estado">{{ programa.cupos_disponibles }}</span>
      </div>
    </div>

    <!-- Botón -->
    <div :class="$style.acciones">
      <router-link
        :to="`/programas/${programa.slug}`"
        :class="$style.botonPrincipal"
      >
        Ver detalle
      </router-link>
    </div>
  </div>
</template>

<script setup lang="ts">
import type { Programa } from '../types/programa.types';
import $style from './ProgramaCard.module.css';

defineProps<{ programa: Programa }>();
</script>