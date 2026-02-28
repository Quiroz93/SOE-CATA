export interface OfertaPrograma {
  id: number;
  cupos: number;
  fecha_inicio: string;
  fecha_fin: string;
  modalidad: string;
  activo: number; // 1 = activo, 0 = inactivo
  programa: {
    id: number;
    nombre: string;
    red_formacion: {
      nombre: string;
    };
  };
  instructor: {
    nombre: string;
  };
}
