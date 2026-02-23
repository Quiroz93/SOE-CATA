import { ref, onMounted } from 'vue';

const activeItem = ref<string>('');

export function useNavbarActive() {
  function setActive(item: string) {
    activeItem.value = item;
    window.location.hash = item;
  }

  onMounted(() => {
    const hash = window.location.hash.replace('#', '');
    if (hash) {
      activeItem.value = hash;
    }
  });

  window.addEventListener('hashchange', () => {
    const hash = window.location.hash.replace('#', '');
    activeItem.value = hash;
  });

  return {
    activeItem,
    setActive,
  };
}
