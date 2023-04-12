<script setup>
const newsList = [
  { title: "news1 via vue" },
  { title: "news2 via vue" }
];

</script>

<template>
<div>
  <div v-for="news in newsList">
    <h3>{{ news.title }}</h3>
  </div>
</div>
</template>
