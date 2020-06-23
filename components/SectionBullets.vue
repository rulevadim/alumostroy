<template>
  <section class="bullets section-padding-y">
    <div class="container">
      <div class="row justify-content-center">
        <slot />
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'SectionBullets',
};
</script>

<style lang="scss">
.bullets {
  background: rgba(0, 0, 0, 0.1);
}
</style>
