import axios from 'axios';
import type { ApiResponse } from '../../types/api.types';

const http = axios.create({
  baseURL: import.meta.env.VITE_API_BASE_URL,
  headers: {
    'Content-Type': 'application/json',
  },
});

/**
 * Interceptor de respuestas
 * Valida contrato institucional
 */
http.interceptors.response.use(
  (response) => {
    const data: ApiResponse<any> = response.data;

    if (data.success === false) {
      return Promise.reject({
        message: data.message,
        errors: data.data ?? null,
        meta: data.meta ?? null,
      });
    }

    // Mutate response.data but return the original response object
    response.data = data;
    return response;
  },
  (error) => {
    if (error.response) {
      const status = error.response.status;

      if (status === 422) {
        return Promise.reject({
          type: 'validation',
          message: error.response.data.message,
          errors: error.response.data.data,
        });
      }

      if (status === 404) {
        return Promise.reject({
          type: 'not_found',
          message: 'Recurso no encontrado',
        });
      }

      if (status >= 500) {
        return Promise.reject({
          type: 'server_error',
          message: 'Error interno del servidor',
        });
      }
    }

    return Promise.reject({
      type: 'network',
      message: 'Error de conexión',
    });
  }
);

export default http;
