<template>
    <div v-if="isVisible" class="notification">
      <div :class="notificationClass">{{ message }}</div>
    </div>
  </template>
  
  <script>
  export default {
    props: ["message", "type"],
    data() {
      return {
        isVisible: true,
      };
    },
    computed: {
      notificationClass() {
        return {
          "bg-green-500": this.type === "success",
          "bg-red-500": this.type === "error",
          "text-white": true,
          "p-2": true,
        };
      },
    },
    mounted() {
      setTimeout(() => {
        this.isVisible = false;
      }, 3000); // Oculta a notificação após 3 segundos (ou o período desejado)
    },
  };
  </script>
  
  <style scoped>
  .notification {
    position: fixed;
    bottom: 10px;
    right: 10px;
    z-index: 999;
  }
  </style>