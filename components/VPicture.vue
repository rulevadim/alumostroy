<template>
  <picture>
    <source :data-srcset="webp" type="image/webp" />
    <source v-if="jpeg" :data-srcset="jpeg" type="image/jpeg" />
    <source v-else :data-srcset="png" type="image/png" />
    <img :data-src="jpeg || png" class="lazyload" :class="classes" />
  </picture>
</template>

<script>
export default {
  name: 'VPicture',
  props: {
    classes: {
      type: String,
      default: '',
    },
    webp: {
      type: String,
      required: true,
    },
    jpeg: {
      type: String,
      default: '',
    },
    png: {
      type: String,
      default: '',
    },
  },
};
</script>
