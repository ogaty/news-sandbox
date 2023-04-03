<script setup>

const categories = [
{ title: "title1" },
{ title: "title2" },
];

</script>

<template>
<div>
  <ul>
    <li v-for="category in categories">
      {{ category.title }}
    </li>
  </ul>
</div>
</template>
