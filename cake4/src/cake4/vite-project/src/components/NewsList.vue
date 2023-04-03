<script setup>
const newsList = [
  { title: "news1" },
  { title: "news2" }
];

</script>

<template>
<div>
  <div v-for="news in newsList">
    <h3>{{ news.title }}</h3>
  </div>
</div>
</template>
