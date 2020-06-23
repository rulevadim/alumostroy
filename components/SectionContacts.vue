<template>
  <section id="block_5">
    <div class="container">
      <div class="title font_black">
        Убедитесь лично в&nbsp;соблюдении высококачественных технологий!
      </div>
      <div class="description font_black">
        Приезжайте к&nbsp;нам на&nbsp;производство, где&nbsp;мы с&nbsp;удовольствием вам всё покажем и&nbsp;ответим
        на&nbsp;все вопросы.
      </div>
      <div class="row justify-content-center">
        <div class="col-auto col-sm-12 col-xl-5 contact-container">
          <div class="row">
            <div class="contact contact_factory col-12 col-sm-5 offset-sm-1 col-xl-12 offset-xl-0">
              <div class="contact__title">Адрес производства:</div>
              <div class="contact__text">г. Пушкино, ул. Льва Толстого,<br />д. 14, склад №10</div>
            </div>
            <div class="contact contact_office col-12 col-sm-6 col-xl-12">
              <div class="contact__title">Адрес офиса:</div>
              <div class="contact__text">г. Пушкино, ул. Добролюбова,<br />влд. 20, офис 208</div>
            </div>
            <div class="contact contact_phone col-12 col-sm-5 offset-sm-1 col-xl-12 offset-xl-0">
              <div class="contact__title">Телефон:</div>
              <div class="contact__text">
                <a href="tel:+7(495)196-64-66">+7(495)196-64-66</a>
                <br />
                <a href="tel:+7(991)339-88-22">+7(991)339-88-22</a>
                <br />
                <a href="tel:+7(969)123-78-11">+7(969)123-78-11</a>
              </div>
            </div>
            <div class="contact contact_email col-12 col-sm-6 col-xl-12">
              <div class="contact__title">E-mail:</div>
              <div class="contact__text">
                <a href="mailto:info@alumostroy.ru">info@alumostroy.ru</a>
              </div>
            </div>
          </div>
        </div>
        <div ref="slider" class="swiper-container col-12 col-xl-7 p-0 mb-4">
          <div class="swiper-wrapper">
            <div v-for="i in 9" :key="i" class="swiper-slide">
              <img :data-src="`uploads/contacts/contact-${i}.jpg`" alt="" class="lazyload" />
              <div class="swiper-lazy-preloader"></div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div id="map" ref="map" v-observe-visibility="{ callback: initMap, once: true }" class="col-12"></div>
      </div>
    </div>
  </section>
</template>

<script>
import { Loader } from 'google-maps';
import Swiper from 'swiper';

export default {
  name: 'SectionContacts',

  mounted() {
    new Swiper(this.$refs.slider, {
      lazy: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      keyboard: true,
    });
  },

  methods: {
    async initMap(isVisible) {
      if (!isVisible) return;
      if (!this.$store.state.googleMapsLoader) {
        const loader = new Loader('AIzaSyDiL5xXH1ZkvBuhD6OqnkyQxIKow7Q0R6w');
        this.$store.commit('setGoogleMapsLoader', await loader.load());
      }
      const google = this.$store.state.googleMapsLoader;
      const map = new google.maps.Map(this.$refs.map, {
        zoom: 15,
        disableDefaultUI: true,
        zoomControl: true,
        center: new google.maps.LatLng(56.013258, 37.836206),
        scrollwheel: false,
      });

      new google.maps.Marker({
        position: new google.maps.LatLng(56.013258, 37.836206),
        map,
        title: 'Офис',
        label: {
          fontWeight: 'bold',
          text: 'Офис',
        },
        icon: {
          labelOrigin: new google.maps.Point(60, 25),
          url: 'http://maps.google.com/mapfiles/kml/paddle/red-circle.png',
          scaledSize: new google.maps.Size(50, 50),
        },
      });

      new google.maps.Marker({
        position: new google.maps.LatLng(56.010735, 37.831855),
        map,
        title: 'Производство',
        label: {
          fontWeight: 'bold',
          text: 'Производство',
        },
        icon: {
          labelOrigin: new google.maps.Point(90, 25),
          url: 'http://maps.google.com/mapfiles/kml/paddle/red-circle.png',
          scaledSize: new google.maps.Size(50, 50),
        },
      });
    },
  },
};
</script>

<style lang="scss">
.contact-container {
  @include media-breakpoint-down(xs) {
    margin-left: 30px;
  }
}

.contact {
  padding-left: 60px;
  margin-bottom: 15px;
  background-repeat: no-repeat;
  background-position: left center;
  background-size: 45px;

  &:last-child {
    margin-bottom: 0;
  }

  &_factory {
    background-image: url(~assets/svg/contacts-factory.svg?inline);
  }

  &_office {
    background-image: url(~assets/svg/contacts-office.svg?inline);
  }

  &_phone {
    background-image: url(~assets/svg/contacts-phone.svg?inline);
    background-position-x: 4px;
  }

  &_email {
    background-image: url(~assets/svg/contacts-email.svg?inline);
  }

  &__title {
    margin-bottom: 6px;
    font-family: 'Open Sans Bold', sans-serif;
    font-size: 18px;
    color: $green;

    @include media-breakpoint-down(md) {
      font-size: 16px;
    }

    @include media-breakpoint-down(xs) {
      font-size: 14px;
    }
  }

  &__text {
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
    line-height: 25px;
    color: black;
    @include media-breakpoint-down(md) {
      font-size: 14px;
      line-height: initial;
    }

    @include media-breakpoint-down(xs) {
      font-size: 12px;
    }

    a {
      color: inherit;
      text-decoration: none;
    }
  }
}

#block_5 .swiper-slide {
  position: relative;
  display: flex;
  justify-content: center;

  &::before {
    display: block;
    padding-top: 75%;
    content: '';
  }

  img {
    position: absolute;
    top: 0;
    z-index: 100;
    height: 100%;
    object-fit: contain;
  }
}

#map {
  height: 450px;
  padding: 0;

  @include media-breakpoint-down(sm) {
    height: 300px;
  }
}
</style>
