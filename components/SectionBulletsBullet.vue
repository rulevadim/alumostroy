<template>
  <div class="bullet col-12 col-sm-6 col-lg-4">
    <div class="bullet__circle" :style="styleCircleBottom">
      <div class="bullet__circle" :style="styleCircleTop"></div>
    </div>
    <div class="bullet__title" :style="styleTitle">
      <slot name="title" />
    </div>
    <div class="bullet__description">
      <slot />
    </div>
  </div>
</template>

<script>
export default {
  name: 'SectionBulletsBullet',

  props: {
    circleBottom: {
      type: Object,
      required: true,
    },
    circleTop: {
      type: Object,
      required: true,
    },
    img: {
      type: Object,
      required: false,
      default() {
        return {};
      },
    },
    title: {
      type: Object,
      required: false,
      default() {
        return {};
      },
    },
  },

  data() {
    return {
      defaultCircleSize: {
        bottom: '130px',
        top: '75%',
      },
    };
  },

  computed: {
    styleCircleBottom() {
      const size = this.circleBottom.size || this.defaultCircleSize.bottom;
      return `
        width: ${size};
        height: ${size};
        background: ${this.circleBottom.color};`;
    },

    styleCircleTop() {
      const size = this.circleTop.size || this.defaultCircleSize.top;
      let style = `
        width: ${size};
        height: ${size};
        background-color: ${this.circleTop.color};`;
      if (this.img)
        style += `
          background-image: url(${this.img.url});
          background-position: ${this.img.position};
          background-size: ${this.img.size};
      `;
      return style;
    },

    styleTitle() {
      let style = `color: ${this.circleBottom.color};`;
      if (this.title) {
        if (this.title.color) style = `color: ${this.title.color};`;
        if (this.title.size) style += `font-size: ${this.title.size}`;
      }
      return style;
    },
  },
};
</script>

<style lang="scss">
.bullet {
  padding-top: 20px;
  padding-bottom: 20px;

  &__circle {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    background-repeat: no-repeat;
    border-radius: 100%;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.4);
  }

  &__title {
    margin-top: 14px;
    font-family: 'Open Sans Bold', sans-serif;
    font-size: 18px;
    text-align: center;
  }

  &__description {
    margin-top: 6px;
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    color: black;
    text-align: center;
  }
}
</style>
