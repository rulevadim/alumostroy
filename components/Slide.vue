<template>
  <div class="swiper-slide">
    <div ref="slide" class="swiper-container gallery-top">
      <div class="swiper-wrapper">
        <div v-for="(image, index) in images" :key="index" class="swiper-slide">
          <div class="photo">
            <a ref="fancybox" :href="image.full">
              <img :data-src="image.medium" alt="" class="lazyload" />
              <div class="swiper-lazy-preloader"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div ref="thumbs" class="swiper-container gallery-thumbs">
      <div class="swiper-wrapper">
        <div v-for="(image, index) in images" :key="index" class="swiper-slide">
          <img :data-src="image.thumbs" alt="" class="lazyload" />
          <div class="swiper-lazy-preloader"></div>
        </div>
      </div>
    </div>
    <div class="caption">
      <div class="caption__address" v-html="content.description.address"></div>
      <div class="caption__footage" v-html="content.description.footage"></div>
      <div class="caption__time" v-html="content.description.time"></div>
    </div>
  </div>
</template>

<script>
import Swiper from 'swiper';

export default {
  name: 'Slide',
  props: {
    content: {
      type: Object,
      required: true,
    },
  },
  data() {
    return {
      images: [],
    };
  },

  created() {
    function imagePaths(content) {
      return Array.from({ length: content.photos }, (el, index) =>
        Object.fromEntries(
          ['full', 'medium', 'thumbs'].map(val => [
            val,
            `uploads/gallery/${content.type}/${content.index}/${val}/pic-${content.index}-${index + 1}.jpg`,
          ])
        )
      );
    }
    this.images = imagePaths(this.content);
  },

  mounted() {
    const galleryThumbs = new Swiper(this.$refs.thumbs, {
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });

    new Swiper(this.$refs.slide, {
      nested: true,
      thumbs: {
        swiper: galleryThumbs,
      },
    });

    this.$fancybox(this.$refs.fancybox);
  },
};
</script>
