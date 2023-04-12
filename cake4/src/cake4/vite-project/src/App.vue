<script setup>
import NewsList from './components/NewsList.vue'
import SideNav from './components/SideNav.vue'

const propsObj = defineProps(['app'])
console.log(JSON.parse(propsObj.app));

</script>

<template>
  <div :style="{ display: 'flex', width: 1000 + 'px', 'justify-content': 'space-between' }">
    <NewsList />
    <SideNav />
  </div>

</template>

