<script lang="ts" setup>
import { ref, watch } from "vue";
import { useRoute } from "vue-router";

const isOpen = ref(false);
const route = useRoute();

const navLinks = [
  { label: "Inicio", to: "/" },
  { label: "Ofertas", to: "/ofertas" },
  { label: "Destacados", to: "/programas" },
  { label: "Calendario", to: "/calendario" },
  { label: "Instructores", to: "/instructores" },
  { label: "Testimonios", to: "/testimonios" },
];

// Cierra menú móvil al cambiar de ruta
watch(
  () => route.fullPath,
  () => {
    isOpen.value = false;
  }
);
</script>

<template>
  <header class="w-full bg-white border-b border-gray-200 shadow-sm sticky top-0 z-50">
    <div class="container mx-auto flex items-center justify-between px-6 py-4">
      
      <!-- Logo -->
      <router-link
        to="/"
        class="text-lg md:text-xl font-bold tracking-wide text-[var(--sena-green)]"
      >
        SENA - Oferta Educativa
      </router-link>

      <!-- Desktop Navigation -->
      <nav class="hidden md:flex items-center gap-8">
        <router-link
          v-for="link in navLinks"
          :key="link.label"
          :to="link.to"
          class="relative text-sm font-medium text-gray-700 transition-colors duration-200"
          :class="[
            route.path === link.to
              ? 'text-[var(--sena-green)]'
              : 'hover:text-[var(--sena-green)]'
          ]"
        >
          {{ link.label }}

          <!-- Línea inferior activa -->
          <span
            v-if="route.path === link.to"
            class="absolute left-0 -bottom-1 w-full h-0.5 bg-[var(--sena-green)] rounded"
          />
        </router-link>
      </nav>

      <!-- Mobile Button -->
      <button
        @click="isOpen = !isOpen"
        class="md:hidden text-gray-700 focus:outline-none focus:ring-2 focus:ring-[var(--sena-green)] rounded"
        :aria-expanded="isOpen"
        aria-controls="mobile-menu"
        aria-label="Abrir menú"
      >
        <svg
          width="28"
          height="28"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          viewBox="0 0 24 24"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M4 6h16M4 12h16M4 18h16"
          />
        </svg>
      </button>
    </div>

    <!-- Mobile Navigation -->
    <transition name="fade">
      <div
        v-if="isOpen"
        id="mobile-menu"
        class="md:hidden border-t border-gray-200 bg-white shadow-sm"
      >
        <div class="flex flex-col px-6 py-4 gap-4">
          <router-link
            v-for="link in navLinks"
            :key="link.label"
            :to="link.to"
            class="text-sm font-medium transition-colors duration-200"
            :class="[
              route.path === link.to
                ? 'text-[var(--sena-green)] font-semibold'
                : 'text-gray-700 hover:text-[var(--sena-green)]'
            ]"
          >
            {{ link.label }}
          </router-link>
        </div>
      </div>
    </transition>
  </header>
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.2s ease;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>