import api from './http.client';

export async function getProgramas(): Promise<any[]> {
  const { data } = await api.get('/programas');
  return data;
}
