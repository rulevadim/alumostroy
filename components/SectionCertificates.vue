<template>
  <section class="certificates section-padding-bottom">
    <div class="container">
      <h2 class="title font_black">Вся продукция сертифицирована</h2>
      <div class="row">
        <div class="col-12">
          <div ref="slider" class="swiper-container">
            <div class="swiper-wrapper">
              <div v-for="i in 8" :key="i" class="swiper-slide">
                <a ref="fancybox" :href="`uploads/certificates/full/certificate-${i}.jpg`">
                  <img :data-src="`uploads/certificates/small/certificate-${i}.jpg`" alt="" class="lazyload" />
                </a>
              </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import Swiper from 'swiper';
export default {
  name: 'SectionCertificates',
  mounted() {
    new Swiper(this.$refs.slider, {
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        991: {
          slidesPerView: 3,
          slidesPerGroup: 3,
        },
        768: {
          slidesPerView: 2,
          slidesPerGroup: 2,
        },
      },
    });

    this.$fancybox(this.$refs.fancybox);
  },
};
</script>

<style lang="scss">
.certificates {
  .swiper-slide {
    display: flex;
    justify-content: center;

    a {
      display: flex !important;
      align-items: flex-start;
      justify-content: center;
      overflow: hidden;
      outline: none;

      &:hover {
        cursor: zoom-in;
      }
    }
  }

  .swiper-button-prev,
  .swiper-button-next {
    @media (max-width: 767px) {
      display: none !important;
    }
  }
}
</style>
