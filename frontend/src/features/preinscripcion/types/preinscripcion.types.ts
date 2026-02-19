export interface PreinscripcionPayload {
  programa_id: number;
  nombres: string;
  apellidos: string;
  documento: string;
  correo: string;
  telefono: string;
}

export interface PreinscripcionResponse {
  id: number;
  programa_id: number;
  estado: string;
}
