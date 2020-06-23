<template>
  <section id="block_3" class="slider-section section-padding-bottom">
    <div class="container">
      <h2 class="title font_black">
        Посмотрите некоторые из&nbsp;выполненных за&nbsp;последние 10&nbsp;лет объектов
      </h2>
      <div class="description font_black">
        Мы&nbsp;установили более 500&nbsp;000&nbsp;м&sup2; алюминиевых конструкций на&nbsp;более чем 1000 объектах
        по&nbsp;Москве и&nbsp;Московской области
      </div>
      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
            <button
              v-for="(button, i) in buttons"
              :key="button.index"
              class="col-auto category-button"
              :class="{
                'category-button_active': buttons[i + 1]
                  ? button.index <= currentSlide && currentSlide < buttons[i + 1].index
                  : button.index <= currentSlide,
              }"
              @click="runToSlide(button.index)"
              v-html="button.name"
            ></button>
          </div>
        </div>
        <div class="col-12 slider-container">
          <div ref="slider" class="swiper-container gallery-all">
            <div class="swiper-wrapper">
              <Slide
                v-for="slide in renderSlides.slides"
                :key="slide.key"
                :style="{ left: `${renderSlides.offset}px` }"
                :content="slide"
              />
            </div>
            <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-bullets-dynamic"></div>
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
import Slide from '~/components/Slide.vue';

// For flat and remap works.json
function worksMapper(worksObj) {
  return Object.keys(worksObj)
    .map(key =>
      Object.keys(worksObj[key])
        .reverse()
        .map(prop => ({
          type: key,
          index: prop,
          photos: worksObj[key][prop],
          key: key[0] + '.' + prop,
        }))
    )
    .flat();
}

async function fetchSlides() {
  return await (await fetch('/uploads/gallery/works.json')).json();
}

async function fetchDescriptions() {
  const descText = await (await fetch('/uploads/gallery/descriptions.txt')).text();
  const descArr = descText.split(/[\r\n]+/).map(el => el.trim());
  const result = {};
  for (let i = 0; i < descArr.length / 4; i++) {
    result[descArr[i * 4]] = {
      address: descArr[i * 4 + 1],
      footage: descArr[i * 4 + 2],
      time: descArr[i * 4 + 3],
    };
  }
  return result;
}

export default {
  name: 'SectionSlider',

  components: {
    Slide,
  },

  data() {
    return {
      renderSlides: {
        slides: [],
      },
      slider: undefined,
      allSlides: this.$store.state.allSlides,
      buttons: this.$store.state.buttons,
      buttonNames: [
        'Алюминиевые окна',
        'Алюминиевые двери',
        'Алюминиевые фасады',
        'Зимние<br />сады',
        'Зенитные<br />фонари',
        'Алюминиевые<br />перегородки',
        'Входные<br />группы',
        'Маятниковые<br />двери',
        'Алюминиевые<br />витражи',
      ],
    };
  },

  computed: {
    currentSlide() {
      return this.slider ? this.slider.activeIndex : 0;
    },
  },

  mounted() {
    this.initSlider();
  },

  methods: {
    async initSlider() {
      if (!this.allSlides && !this.buttons) {
        const worksObj = await fetchSlides();
        const descriptions = await fetchDescriptions();

        this.allSlides = worksMapper(worksObj).map(el => {
          el.description = descriptions[el.key];
          return el;
        });

        this.buttons = Object.values(worksObj).map((el, index, array) => {
          return {
            name: this.buttonNames[index],
            index: array.slice(0, index).reduce((sum, el) => sum + Object.keys(el).length, 0),
          };
        });
        this.$store.commit('setAllSlides', this.allSlides);
        this.$store.commit('setButtons', this.buttons);
      }

      const self = this;
      this.slider = new Swiper(this.$refs.slider, {
        noSwipingClass: 'gallery-thumbs',
        updateOnImagesReady: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          dynamicBullets: true,
          dynamicMainBullets: 3,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        keyboard: true,
        virtual: {
          cache: true,
          slides: self.allSlides,
          renderExternal(data) {
            self.renderSlides = data;
          },
        },
      });
    },

    runToSlide(index) {
      this.slider.slideTo(index);
    },
  },
};
</script>
