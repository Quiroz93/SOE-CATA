import { defineStore } from 'pinia';
import type { OfertaPrograma } from '../types/oferta.types';
import { getOfertas, getOfertaDetalle } from '../services/ofertas.service';

export const useOfertasStore = defineStore('ofertas', {
  state: () => ({
    ofertas: [] as OfertaPrograma[],
    ofertaSeleccionada: null as OfertaPrograma | null,
    loading: false,
    error: null as string | null,
  }),
  actions: {
    async fetchOfertas() {
      this.loading = true;
      this.error = null;
      try {
        this.ofertas = await getOfertas();
      } catch (e: any) {
        this.error = e.message || 'Error al cargar ofertas';
      } finally {
        this.loading = false;
      }
    },
    async fetchOfertaDetalle(id: number) {
      this.loading = true;
      this.error = null;
      try {
        this.ofertaSeleccionada = await getOfertaDetalle(id);
      } catch (e: any) {
        this.error = e.message || 'Error al cargar detalle';
      } finally {
        this.loading = false;
      }
    },
  },
  getters: {
    ofertasDisponibles: (state) => state.ofertas.filter(o => o.cupos > 0),
  },
});
