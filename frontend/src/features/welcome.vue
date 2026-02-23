<template>
  <div class="welcome-page">

    <!-- HERO SECTION -->
    <header class="container hero">
      <div class="left">
        <h1>
          Bienvenido a un nuevo mundo de oportunidades en la plataforma SOE SENA
        </h1>

        <p class="sub-heading">
          Tu puerta al conocimiento y el aprendizaje.
        </p>

        <div class="buttons">
          <router-link to="/programas" class="btn">
            Explorar Programas
          </router-link>
          <router-link to="/contacto" class="btn outlined">
            Contáctanos
          </router-link>
        </div>
      </div>

      <div class="right">
        <img src="/images/hero-image.png" alt="Education Illustration" />
        <div class="bg-color"></div>
      </div>
    </header>

    <!-- FEATURED -->
    <section class="featured">
      <div class="container">
        <h2>Encuéntranos en</h2>
        <div class="logos">
          <img src="/images/airbnb-logo.svg" alt="Airbnb" />
          <img src="/images/spotify-logo.svg" alt="Spotify" />
          <img src="/images/google-logo.svg" alt="Google" />
          <img src="/images/canva-logo.svg" alt="Canva" />
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="container">
      <div class="left">
        <h2>Sobre Nosotros</h2>
        <p>
          En SOE SENA, estamos dedicados a proporcionar educación de calidad
          y oportunidades de aprendizaje para todos.
        </p>

        <div class="features-container">
          <div class="feature" v-for="feature in aboutFeatures" :key="feature.title">
            <div class="icon">
              <img src="/images/check-icon.svg" alt="Check Icon" />
            </div>
            <h3>{{ feature.title }}</h3>
            <p>{{ feature.description }}</p>
          </div>
        </div>

        <router-link to="/about" class="btn outlined">Leer Más</router-link>
      </div>

      <div class="right">
        <img src="/images/image1.jpg" alt="About Illustration" />
      </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="container">
      <div class="heading-container">
        <h2>Nuestros Programas</h2>
        <p>Conoce nuestros programas de formación</p>
      </div>

      <div class="services-container">
        <div class="service" v-for="service in services" :key="service.title">
          <img :src="service.image" alt="" />
          <div class="content">
            <h3>{{ service.title }}</h3>
            <p>{{ service.description }}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- BLOG -->
    <section id="blog" class="container">
      <div class="heading-container">
        <h2>Últimas Noticias</h2>
        <p>Mantente informado con nuestras últimas actualizaciones</p>
      </div>

      <div class="services-container">
        <div class="service" v-for="post in blogPosts" :key="post.title">
          <img :src="post.image" :alt="post.title" />
          <div class="content">
            <h3>{{ post.title }}</h3>
            <p>{{ post.description }}</p>
          </div>
        </div>
      </div>

      <a href="#" class="btn outlined">Ver todas las noticias</a>
    </section>

    <!-- CONTACT -->
    <section class="contact">
      <div class="container">
        <div class="heading-container">
          <h2>¿Listo para comenzar tu viaje educativo con SOE SENA?</h2>
          <p>Estamos aquí para ayudarte a dar el siguiente paso.</p>
        </div>

        <form @submit.prevent="submitForm">
          <div class="group">
            <input v-model="form.name" type="text" placeholder="Nombre Completo" required />
            <input v-model="form.email" type="email" placeholder="Correo Electrónico" required />
          </div>

          <textarea v-model="form.message" placeholder="Tu Mensaje" required></textarea>

          <button type="submit" class="btn">Enviar Mensaje</button>
        </form>
      </div>
    </section>

    <!-- FOOTER -->
    <footer>
      <div class="container">
        <div class="top">
          <div class="left">
            <h3>SOE | SENA</h3>
            <p>Empoderando tu futuro a través de la educación.</p>
          </div>
        </div>

        <div class="copyright">
          <p>© 2026 SENA | CATA.</p>
        </div>
      </div>
    </footer>

  </div>
</template>

<script setup>
import { reactive } from 'vue'

const aboutFeatures = [
  {
    title: 'Educación de Calidad',
    description: 'Programas diseñados por expertos.'
  },
  {
    title: 'Aprendizaje Flexible',
    description: 'Accede en cualquier momento.'
  },
  {
    title: 'Soporte Continuo',
    description: 'Te acompañamos en cada paso.'
  },
  {
    title: 'Educación Gratuita',
    description: 'Formación sin costo para todos.'
  }
]

const services = [
  {
    title: 'Tecnología de la Información',
    description: 'Programación, redes y ciberseguridad.',
    image: '/images/service1.jpg'
  },
  {
    title: 'Salud y Bienestar',
    description: 'Formación integral en salud.',
    image: '/images/service2.jpg'
  },
  {
    title: 'Negocios y Emprendimiento',
    description: 'Impulsa tu propio negocio.',
    image: '/images/service3.jpg'
  }
]

const blogPosts = [
  {
    title: 'Nuevo Programa en Energías Renovables',
    description: 'Formación en energías limpias.',
    image: '/images/blog1.jpg'
  },
  {
    title: 'Evento de Networking',
    description: 'Conecta con profesionales.',
    image: '/images/blog2.jpg'
  },
  {
    title: 'Historias de Éxito',
    description: 'Graduados que transforman el mundo.',
    image: '/images/blog3.jpg'
  }
]

const form = reactive({
  name: '',
  email: '',
  message: ''
})

function submitForm() {
  console.log('Formulario enviado:', form)
}
</script>

<style scoped>
.welcome-page {
  width: 100%;
}
</style>