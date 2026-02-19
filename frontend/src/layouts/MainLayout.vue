<template>
  <div class="min-h-screen flex flex-col bg-[#f4f6f8] font-sans">
    <header class="bg-[#00843D] shadow p-4 flex items-center gap-4">
      <img src="/logo-sena.png" alt="SENA Logo" class="w-[90px] h-[90px] object-contain" />
      <h1 class="text-2xl font-bold text-white tracking-wide">SOE-CATA</h1>
    </header>
    <main class="flex-1 p-4 max-w-5xl mx-auto w-full">
      <router-view />
    </main>
    <footer class="bg-[#00843D] shadow p-4 text-center text-xs text-white">
      © 2026 SENA | Servicio Nacional de Aprendizaje
    </footer>
  </div>
</template>
<script setup lang="ts">
// Composition API
</script>
