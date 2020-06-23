<template>
  <div class="main-container">
    <section class="promo">
      <VPicture
        classes="promo__bg"
        :webp="require('~/assets/img/bg-promo.jpg?webp')"
        :jpeg="require('~/assets/img/bg-promo.jpg')"
      />
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="promo__text">
              Алюминиевые конструкции от&nbsp;производителя по&nbsp;цене
              <br class="d-sm-none" />
              от&nbsp;1200&nbsp;₽/м&sup2;
            </h1>
          </div>
        </div>
      </div>
    </section>

    <SectionFormMeasurerHome />

    <SectionCatalog />

    <SectionBullets>
      <SectionBulletsBullet
        :circle-bottom="{ color: '#499b4a' }"
        :circle-top="{ color: '#c7c817' }"
        :img="{
          url: require('~/assets/svg/bullet-coins.svg?inline'),
          position: '65% center',
          size: '65%',
        }"
      >
        <template v-slot:title>Никаких наценок</template>
        Мы&nbsp;являемся производителями,<br />поэтому наши цены ниже,<br />чем у&nbsp;конкурентов
      </SectionBulletsBullet>

      <SectionBulletsBullet
        :circle-bottom="{ color: '#e36a4e' }"
        :circle-top="{ color: '#ecb071' }"
        :img="{
          url: require('~/assets/svg/bullet-trophy.svg?inline'),
          position: 'center',
          size: '67%',
        }"
      >
        <template v-slot:title>Опыт более 10 лет</template>
        Давно успешно устанавливаем<br />алюминиевые конструкции<br />нашим клиентам
      </SectionBulletsBullet>

      <SectionBulletsBullet
        :circle-bottom="{ color: '#3a78b4' }"
        :circle-top="{ color: '#4cc7cd' }"
        :img="{
          url: require('~/assets/svg/bullet-hands.svg?inline'),
          position: 'center 70%',
          size: '77%',
        }"
      >
        <template v-slot:title>Гарантия — 3 года</template>
        Плюс 1&nbsp;год бесплатного<br />технического обслуживания.<br />Это прописывается<br />в&nbsp;договоре
      </SectionBulletsBullet>
    </SectionBullets>

    <client-only>
      <SectionSlider />
    </client-only>

    <SectionCalculator />

    <section class="profit-section section-padding-bottom">
      <VPicture
        classes="profit-section__bg"
        :webp="require('~/assets/img/bg-pic-4-right.jpg?webp')"
        :jpeg="require('~/assets/img/bg-pic-4-right.jpg')"
      />
      <div class="container">
        <h2 class="title profit-section__title font_black">
          Чем лучше алюминиевые конструкции?
        </h2>
        <div class="row">
          <div class="col-md-9 col-lg-8 col-xl-8">
            <div class="profit">
              <div class="profit__title">
                Выдерживают большие
                <br class="d-none d-lg-block d-xl-none" />ветровые нагрузки
              </div>
              <div class="profit__text">
                Алюминиевые конструкции выдерживают больше
                <br class="d-none d-sm-block d-md-none d-xl-block" />ветровых нагрузок, чем пластиковые или деревянные
              </div>
            </div>
            <div class="profit">
              <div class="profit__title">Служат в 2-3 раза дольше</div>
              <div class="profit__text">
                Алюминиевые конструкции могут прослужить
                <br class="d-none d-sm-block" />до&nbsp;40&nbsp;лет, это в&nbsp;2-3 раза дольше чем пластиковые
              </div>
            </div>
            <div class="profit">
              <div class="profit__title">Легко ремонтируются</div>
              <div class="profit__text">
                Алюминиевый профиль легко отремонтировать
                <br class="d-none d-sm-block" />или заменить в&nbsp;случае необходимости
              </div>
            </div>
            <div class="profit">
              <div class="profit__title">Не подвержены горению</div>
              <div class="profit__text">
                Алюминий не&nbsp;подвержен горению и&nbsp;не&nbsp;источает химических
                <br class="d-none d-sm-block d-md-none d-xl-block" />испарений под воздействием высоких температур
              </div>
            </div>
            <div class="profit">
              <div class="profit__title">Позволяют получить больше света</div>
              <div class="profit__text">
                Алюминиевые конструкции из-за большой выносливости к&nbsp;ветровым нагрузкам выдерживают большие массы
                стеклопакетов, что позволяет получить красивый панорамный вид и&nbsp;много света внутри помещения
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="alumark-section section-padding-bottom">
      <VPicture
        classes="alumark-section__bg"
        :webp="require('~/assets/img/bg-alumark.jpg?webp')"
        :jpeg="require('~/assets/img/bg-alumark.jpg')"
      />
      <div class="container">
        <div class="title alumark-section__title font_white">
          Сделано по&nbsp;немецкой технологии Alumark
        </div>
        <div class="row">
          <div class="col-12">
            <div class="alumark-feature">
              В&nbsp;2013&nbsp;в Германии году была представлена строительная алюминиевая система ALUMARK.
            </div>
            <div class="alumark-feature">
              Главной задачей системы Alumark было соединить все инновационные немецкие решения в&nbsp;области
              остекления и&nbsp;адаптировать их&nbsp;под климатические особенности России.
            </div>
            <div class="alumark-feature">
              Система Alumark это аналог немецкой системы Гутман, работающая по&nbsp;тому&nbsp;же принципу,
              с&nbsp;теми&nbsp;же выносливостью и&nbsp;конструктивом.
            </div>
            <div class="alumark-feature">
              Alumark позволяет воплощать любые проекты с&nbsp;разными видами алюминиевых конструкций&nbsp;&mdash;
              от&nbsp;перегородок до&nbsp;зимних садов.
            </div>
            <div class="alumark-feature">
              Делится на&nbsp;2&nbsp;основные группы профилей: холодные, для уличных работ и&nbsp;тёплые
              с&nbsp;термоизолятором, для остекления помещений.
            </div>
          </div>
        </div>
      </div>
    </section>

    <SectionContacts />

    <section class="windows section-padding-bottom">
      <VPicture
        classes="windows__bg"
        :webp="require('~/assets/img/bg-windows.jpg?webp')"
        :jpeg="require('~/assets/img/bg-windows.jpg')"
      />
      <div class="container">
        <div class="title font_black windows__title">
          Устанавливаем стеклопакеты&nbsp;DS<br />с&nbsp;серебряным напылением
        </div>
        <div class="row justify-content-center">
          <div class="col-auto col-sm-12 features">
            <div class="feature">
              <div>
                <div class="feature__number feature__number_img-1"></div>
                <div class="feature__text">Защищают<br />от&nbsp;ультрафи-<br />олетового<br />излучения</div>
              </div>
            </div>
            <div class="feature">
              <div>
                <div class="feature__number feature__number_img-2"></div>
                <div class="feature__text">Сохраняют<br />прохладу<br />летом</div>
              </div>
            </div>
            <div class="feature">
              <div>
                <div class="feature__number feature__number_img-3"></div>
                <div class="feature__text">Удерживают<br />тепло зимой</div>
              </div>
            </div>
            <div class="feature">
              <div>
                <div class="feature__number feature__number_img-4"></div>
                <div class="feature__text">Препятствуют<br />образованию<br />конденсата</div>
              </div>
            </div>
            <div class="feature">
              <div>
                <div class="feature__number feature__number_img-5"></div>
                <div class="feature__text">Улучшают<br />внешний<br />вид&nbsp;окна</div>
              </div>
            </div>
          </div>
        </div>
        <div class="title windows__title-2 font_regular">
          Стеклопакеты&nbsp;DS доступны&nbsp;в&nbsp;4&nbsp;цветах:
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="window">
              <VPicture
                :webp="require('~/assets/img/diamond.png')"
                :png="require('~/assets/img/diamond.png')"
                classes="window__img"
              />
              <div class="window__text">Clear Diamond</div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="window">
              <VPicture
                :webp="require('~/assets/img/sapphire.png')"
                :png="require('~/assets/img/sapphire.png')"
                classes="window__img window__img_2"
              />
              <div class="window__text">Blue Sapphire</div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="window">
              <VPicture
                :webp="require('~/assets/img/gold.png')"
                :png="require('~/assets/img/gold.png')"
                classes="window__img window__img_3"
              />
              <div class="window__text">Red Gold</div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="window">
              <VPicture
                :webp="require('~/assets/img/platinum.png')"
                :png="require('~/assets/img/platinum.png')"
                classes="window__img window__img_3"
              />
              <div class="window__text">Whire Platinum</div>
            </div>
          </div>
        </div>

        <div class="pilkington">
          <img
            :data-src="require('~/assets/img/pilkington_logo.png')"
            alt="pilkington logo"
            class="pilkington__logo lazyload"
          />

          <div class="pilkington__description font_black">
            Также мы&nbsp;устанавливаем стекла Пилкингтон, обладающие специальным покрытием, которое отражает тепло
            назад в&nbsp;помещение, и&nbsp;в&nbsp;то&nbsp;же время свободно пропускает солнечное тепло снаружи, тем
            самым пассивно используя энергию солнца.
          </div>
        </div>
      </div>
    </section>

    <SectionCertificates />

    <SectionBullets>
      <SectionBulletsBullet
        :circle-bottom="{ color: '#223b55' }"
        :circle-top="{ color: '#7faed6' }"
        :img="{
          url: require('~/assets/svg/bullet-delivery.svg?inline'),
          position: '50% 40%',
          size: '67%',
        }"
      >
        <template v-slot:title>Бесплатная доставка</template>
        Доставим алюминиевые<br />конструкции до&nbsp;вашего объекта
      </SectionBulletsBullet>

      <SectionBulletsBullet
        :circle-bottom="{ color: '#8c4986' }"
        :circle-top="{ color: '#c270a3' }"
        :img="{
          url: require('~/assets/svg/bullet-certification.svg?inline'),
          position: 'center',
          size: '65%',
        }"
      >
        <template v-slot:title>Работаем по&nbsp;договору</template>
        В&nbsp;нём&nbsp;мы&nbsp;чётко прописываем<br />перечень работ, их&nbsp;стоимость<br />и&nbsp;сроки выполнения
      </SectionBulletsBullet>

      <SectionBulletsBullet
        :circle-bottom="{ color: '#1a5c5b' }"
        :circle-top="{ color: '#acc9c0' }"
        :img="{
          url: require('~/assets/svg/bullet-discount.svg?inline'),
          position: 'center',
          size: '70%',
        }"
      >
        <template v-slot:title>Скидки до&nbsp;18%</template>
        Специальные предложения<br />для оптовых клиентов,<br />при&nbsp;заказе от&nbsp;1000м&sup2;
      </SectionBulletsBullet>
    </SectionBullets>

    <section class="partners section-padding-bottom">
      <div class="container">
        <h2 class="title font_black">Наши партнёры</h2>
        <div class="row">
          <div v-for="i in 16" :key="i" class="col-6 col-sm-3">
            <img :data-src="`uploads/partners/partner-${i}.jpg`" alt="" class="lazyload" />
          </div>
        </div>
      </div>
    </section>

    <section class="questions section-padding-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-9 col-md-8 col-lg-7 col-xl-6">
            <div class="title font_white">Остались вопросы?</div>
            <div class="description font_white">
              Напишите, что вас интересует, наши специалисты свяжутся с&nbsp;вами и&nbsp;ответят на&nbsp;все вопросы!
            </div>
            <form ref="form" action="./contact.php" method="post">
              <div class="row">
                <div class="col-12 mb-4">
                  <textarea
                    name="comment"
                    class="form-element questions__comment"
                    placeholder="Ваши комментарии"
                    rows="4"
                  ></textarea>
                </div>
                <div class="col-12 col-sm mb-4 mb-sm-0">
                  <input
                    type="email"
                    name="email"
                    class="form-element questions__email"
                    placeholder="Введите Ваш e-mail"
                  />
                </div>
                <div class="col-12 col-sm">
                  <input type="submit" value="Получить ответ" class="form-element form-submit questions__submit" />
                </div>
              </div>
              <input type="hidden" name="location" value="[alumostroy.ru] Форма обратной связи" />
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- <img :srcset="require(`~/assets/img/test.jpg?sizes[]=200&sizes[]=600&sizes[]=1000`).srcSet" alt="" /> -->
    <img :src="pic.src" :srcset="pic.srcSet" alt="" />
  </div>
</template>

<script>
import SectionFormMeasurerHome from '~/components/SectionFormMeasurerHome.vue';
import SectionBullets from '~/components/SectionBullets.vue';
import SectionBulletsBullet from '~/components/SectionBulletsBullet.vue';
import SectionSlider from '~/components/SectionSlider.vue';
import SectionContacts from '~/components/SectionContacts.vue';
import SectionCalculator from '~/components/SectionCalculator.vue';
import SectionCertificates from '~/components/SectionCertificates.vue';
import SectionCatalog from '~/components/SectionCatalog.vue';

import pic from '~/assets/img/test.jpg?webp&sizes[]=320&sizes[]=640&sizes[]=1280&sizes[]=1920';

export default {
  name: 'Home',
  components: {
    SectionFormMeasurerHome,
    SectionSlider,
    SectionBullets,
    SectionBulletsBullet,
    SectionContacts,
    SectionCalculator,
    SectionCertificates,
    SectionCatalog,
  },

  data() {
    return {
      tes: 'sizes[]=320&sizes[]=640&sizes[]=1280&sizes[]=8000',
      a: 200,
      pic,
    };
  },

  mounted() {
    this.$validate(this.$refs.form, {
      phone: {
        required: true,
        number: true,
        minlength: 10,
      },
      comment: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
    });
  },

  head() {
    return {
      title: 'Алюминиевые конструкции от производителя в Москве и Московской области',
      meta: [
        {
          name: 'description',
          content: 'Производство и монтаж алюминиевых конструкций по Москве и Московской области по низким ценам!',
        },
        {
          name: 'keywords',
          content:
            'алюминиевые окна алюминиевые двери алюминиевые конструкции от производителя низкие цены производство установка',
        },
      ],
    };
  },
};
</script>
