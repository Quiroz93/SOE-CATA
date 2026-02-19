import type { PreinscripcionRequest, ApiResponse } from '../types/api.types';
import httpClient from '../core/http/http.client';

export async function submitPreinscripcion(data: PreinscripcionRequest): Promise<ApiResponse<null>> {
  const response = await httpClient.post<ApiResponse<null>>('/preinscripcion', data);
  return response.data;
}
