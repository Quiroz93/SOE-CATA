import http from '@/core/http/http.client';
import type { OfertaPrograma } from '../types/oferta.types';

export async function getOfertas(): Promise<OfertaPrograma[]> {
  const response = await http.get('/ofertas');
  return response.data.data as OfertaPrograma[];
}

export async function getOfertaDetalle(id: number): Promise<OfertaPrograma> {
  const response = await http.get(`/ofertas/${id}`);
  return response.data.data as OfertaPrograma;
}
