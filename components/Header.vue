<template>
  <header id="block_1">
    <div class="header-top container">
      <div class="row align-items-center">
        <div class="logo col-12 col-sm-auto">
          <nuxt-link to="/" class="logo__img">
            <img src="~/assets/svg/logo.svg" alt="Алюмо Строй Логотип" />
          </nuxt-link>
          <div class="logo__text">
            Производство и&nbsp;монтаж алюминиевых конструкций в&nbsp;Москве и&nbsp;Московской области
          </div>
        </div>
        <div class="contacts-wrapper col">
          <div class="clock">
            <svg
              class="clock__img"
              style="fill: currentColor;"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512"
            >
              <path
                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"
              />
            </svg>
            <div class="clock__text">
              Ежеденевно с&nbsp;10 до&nbsp;20
            </div>
          </div>
          <div class="contacts">
            <a href="tel:+74951966466" class="contacts__phone">+7 (495) 196-64-66</a>
            <a ref="fancybox" href="#pop-callback" class="contacts__callback">Заказать обратный звонок</a>
            <a href="mailto:info@alumostroy.ru" class="contacts__mail">info@alumostroy.ru</a>
          </div>
        </div>
      </div>
    </div>
    <div class="header-menu">
      <div class="container">
        <div class="row">
          <nav class="menu col-12">
            <ul class="menu__list">
              <li class="menu__item">
                <nuxt-link
                  :to="{ path: '/', hash: '#block_1' }"
                  class="menu__link"
                  @click.native="$scrollTo('#block_1')"
                  >Главная</nuxt-link
                >
              </li>
              <li class="menu__item">
                <nuxt-link
                  :to="{ path: '/', hash: '#block_2' }"
                  class="menu__link"
                  @click.native="$scrollTo('#block_2')"
                  >Каталог</nuxt-link
                >
              </li>
              <li class="menu__item">
                <nuxt-link
                  :to="{ path: '/', hash: '#block_3' }"
                  class="menu__link"
                  @click.native="$scrollTo('#block_3')"
                  >Примеры работ</nuxt-link
                >
              </li>
              <li class="menu__item">
                <nuxt-link
                  :to="{ path: '/', hash: '#block_4' }"
                  class="menu__link"
                  @click.native="$scrollTo('#block_4')"
                  >Калькулятор стоимости</nuxt-link
                >
              </li>
              <li class="menu__item">
                <nuxt-link to="/profil-alumark" class="menu__link">Профиль Алюмарк</nuxt-link>
              </li>
              <li class="menu__item">
                <nuxt-link
                  :to="{ path: '/', hash: '#block_5' }"
                  class="menu__link"
                  @click.native="$scrollTo('#block_5')"
                >
                  Контакты
                </nuxt-link>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: 'Header',
  mounted() {
    this.$fancybox(this.$refs.fancybox);
  },
};
</script>
