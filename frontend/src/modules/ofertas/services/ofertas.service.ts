import http from '@/core/http/http.client';
import type { OfertaPrograma } from '../types/oferta.types';

export async function getOfertas(): Promise<OfertaPrograma[]> {
  const response = await http.get('/api/v1/ofertas');
  return response.data.data.map((oferta: any) => {
    const programaData = oferta.programas && oferta.programas.length > 0 ? oferta.programas[0] : {};
    return {
      id: oferta.id,
      cupos: programaData.cupos ?? 0,
      fecha_inicio: oferta.fecha_inicio,
      fecha_fin: oferta.fecha_fin,
      modalidad: programaData.modalidad ?? '',
      activo: oferta.estado,
      programa: programaData.programa ?? { id: 0, nombre: '', red_formacion: { nombre: '' } },
      instructor: programaData.instructor ?? { nombre: '' }
    };
  }) as OfertaPrograma[];
}

export async function getOfertaDetalle(id: number): Promise<OfertaPrograma> {
  const response = await http.get(`/ofertas/${id}`);
  return response.data.data as OfertaPrograma;
}
