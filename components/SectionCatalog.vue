<template>
  <section id="block_2" class="catalog section-padding-bottom">
    <VPicture
      classes="catalog__bg"
      :webp="require('~/assets/img/bg-catalog.png?webp')"
      :png="require('~/assets/img/bg-catalog.png')"
    />
    <div class="container">
      <h2 class="title font_black">Наши алюминиевые конструкции</h2>
      <div class="catalog__row row">
        <div class="item col-12 col-lg-8">
          <nuxt-link to="/aluminievie-okna" class="item__link">
            <VPicture
              classes="item__img"
              :webp="require('~/assets/img/window.jpg?webp')"
              :jpeg="require('~/assets/img/window.jpg')"
            />
            <span class="item__title">Окна</span>
          </nuxt-link>
        </div>
        <div class="col-12 col-lg-4">
          <div class="row">
            <div class="item col-12 col-sm-6 col-lg-12">
              <nuxt-link to="/aluminievie-fasadi" class="item__link">
                <VPicture
                  classes="item__img"
                  :webp="require('~/assets/img/facade.jpg?webp')"
                  :jpeg="require('~/assets/img/facade.jpg')"
                />
                <span class="item__title">Фасады</span>
              </nuxt-link>
            </div>
            <div class="item col-12 col-sm-6 col-lg-12">
              <nuxt-link to="/aluminievie-dveri" class="item__link">
                <VPicture
                  classes="item__img"
                  :webp="require('~/assets/img/door.jpg?webp')"
                  :jpeg="require('~/assets/img/door.jpg')"
                />
                <span class="item__title">Двери</span>
              </nuxt-link>
            </div>
          </div>
        </div>
        <div class="item col-12 col-sm-6 col-lg-4">
          <nuxt-link to="/aluminievie-zimnie-sadi" class="item__link">
            <VPicture
              classes="item__img"
              :webp="require('~/assets/img/garden.jpg?webp')"
              :jpeg="require('~/assets/img/garden.jpg')"
            />
            <span class="item__title">Зимние сады</span>
          </nuxt-link>
        </div>
        <div class="item col-12 col-sm-6 col-lg-4">
          <nuxt-link to="/aluminievie-ofisnie-peregorodki" class="item__link">
            <VPicture
              classes="item__img"
              :webp="require('~/assets/img/partition.jpg?webp')"
              :jpeg="require('~/assets/img/partition.jpg')"
            />
            <span class="item__title">Перегородки</span>
          </nuxt-link>
        </div>
        <div class="item col-12 col-sm-6 col-lg-4">
          <nuxt-link to="/aluminievie-vhodnie-gruppi" class="item__link">
            <VPicture
              classes="item__img"
              :webp="require('~/assets/img/group.jpg?webp')"
              :jpeg="require('~/assets/img/group.jpg')"
            />
            <span class="item__title">Входные группы</span>
          </nuxt-link>
        </div>
        <div class="item col-12 col-sm-6 col-lg-4">
          <nuxt-link to="/aluminievie-zenitnie-fonari" class="item__link item__link_lamp">
            <VPicture
              classes="item__img item__img_lamp"
              :webp="require('~/assets/img/lamp.jpg?webp')"
              :jpeg="require('~/assets/img/lamp.jpg')"
            />
            <span class="item__title">Зенитные фонари</span>
          </nuxt-link>
        </div>
        <div class="item col-12 col-lg-4">
          <nuxt-link to="/aluminievie-mayatnikovie-dveri" class="item__link">
            <VPicture
              classes="item__img"
              :webp="require('~/assets/img/pendulum.jpg?webp')"
              :jpeg="require('~/assets/img/pendulum.jpg')"
            />
            <span class="item__title">Маятниковые двери</span>
          </nuxt-link>
        </div>
        <div class="item col-12 col-lg-4">
          <nuxt-link to="/aluminievie-vitrazhi" class="item__link">
            <VPicture
              classes="item__img"
              :webp="require('~/assets/img/glass.jpg?webp')"
              :jpeg="require('~/assets/img/glass.jpg')"
            />
            <span class="item__title">Витражи</span>
          </nuxt-link>
        </div>
      </div>
    </div>
  </section>
</template>
