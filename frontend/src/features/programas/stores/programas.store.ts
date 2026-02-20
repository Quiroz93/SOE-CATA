import { defineStore } from 'pinia';
import { programasService } from '@/features/programas/services/programas.service';
import type { Programa } from '../types/programa.types';
import type { ApiMeta } from '../../../types/api.types';

export const useProgramasStore = defineStore('programas', {
  state: () => ({
    programas: [] as Programa[],
    programaActual: null as Programa | null,
    meta: {} as ApiMeta,
    loading: false
  }),

  actions: {
    async fetchProgramas(filters?: Record<string, any>) {
      this.loading = true;
      try {
        const { data, meta } = await programasService.listar(filters);
        this.programas = data;
        this.meta = meta ?? {};
      } finally {
        this.loading = false;
      }
    },

    async fetchProgramaDetalle(slug: string) {
      this.loading = true;
      try {
        const response = await programasService.obtenerPorSlug(slug);
        this.programaActual = response.data;
      } finally {
        this.loading = false;
      }
    }
  }
});
