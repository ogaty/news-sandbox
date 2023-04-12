<script setup>

const categories = [
{ title: "title1" },
{ title: "title2" },
];

</script>

<template>
<div :style="{ width: 300 + 'px' }">
  <ul>
    <li v-for="category in categories">
      {{ category.title }}
    </li>
  </ul>
</div>
</template>
