import { createApp } from 'vue'
import './style.css'
import App from './App.vue'

const mountElement = document.querySelector("#app");

createApp(App, { ...mountElement.dataset }).mount('#app')
