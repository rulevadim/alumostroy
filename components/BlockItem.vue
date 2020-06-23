<template>
  <div class="block-item mt-5 mx-2">
    <img :src="content.img" alt="" class="block-item__img" />
    <div class="block-item__title" v-html="content.title"></div>
    <div v-for="(desc, key) in content.description" :key="key" class="block-item__description" v-html="desc"></div>
    <div class="block-item__buttons">
      <a ref="fancybox" href="#pop-callback" class="form-element form-submit"
        >Получить бесплатный<br />расчёт стоимости</a
      >
    </div>
  </div>
</template>

<script>
export default {
  name: 'BlockItem',
  // content = { img: '', title: '', description: ''[] }
  props: {
    content: {
      type: Object,
      default() {
        return {};
      },
    },
  },
  mounted() {
    this.$fancybox(this.$refs.fancybox);
  },
};
</script>

<style lang="scss">
.block-item {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  line-height: 1.6rem;

  &__img {
    display: block;
    max-width: 100%;
  }

  &__title {
    margin-top: rem(15px);
  }

  &__description {
    margin-top: rem(7px);
  }

  &__buttons {
    margin-top: auto;
    a {
      padding-top: rem(10px);
      padding-bottom: rem(10px);
      margin-top: 19px;
    }
  }
}
</style>
