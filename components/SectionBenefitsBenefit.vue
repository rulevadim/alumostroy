<template>
  <div class="block-benefit">
    <div class="block-benefit__icon" v-html="img"></div>
    <div class="block-benefit__title"><slot name="title" /></div>
    <div class="block-benefit__text">
      <slot />
    </div>
  </div>
</template>

<script>
export default {
  name: 'SectionBenefitsBenefit',
  props: {
    img: {
      type: String,
      default: '',
    },
  },
};
</script>

<style lang="scss">
.block-benefit {
  padding: 0 10px;
  margin-top: 30px;
  font-size: 14px;
  text-align: center;

  @include media-breakpoint-up(md) {
    flex-basis: calc(100% / 3);
  }

  &__icon {
    display: flex;
    justify-content: center;
    height: 50px;

    svg {
      height: 100%;
    }
  }

  &__title {
    margin: 24px 0 0;
    font-family: 'Open Sans Bold', sans-serif;
    font-size: 18px;
    color: black;
  }

  &__text {
    margin: 10px 0 0;
    font-style: italic;
    color: $light;
  }
}
</style>
