<template>
  <div>
    <h1 class="title title_pages">
      Фурнитура
    </h1>

    <SectionBenefits />

    <h2 class="subtitle">
      Нажимные ручки
    </h2>
    <div class="d-flex flex-wrap justify-content-around mt-n5 mt-n2">
      <BlockItem v-for="(item, key) in nRuchki" :key="key" :content="item" />
    </div>

    <h2 class="subtitle">
      Поручни из&nbsp;нержавейки
    </h2>
    <div class="d-flex flex-wrap justify-content-around mt-n5 mt-n2">
      <BlockItem v-for="(item, key) in poruchni" :key="key" :content="item" />
    </div>

    <h2 class="subtitle">
      Ручки скобы
    </h2>
    <div class="d-flex flex-wrap justify-content-around mt-n5 mt-n2">
      <BlockItem v-for="(item, key) in skoby" :key="key" :content="item" />
    </div>

    <h2 class="subtitle">
      Доводчики
    </h2>
    <div class="d-flex flex-wrap justify-content-around mt-n5 mt-n2">
      <BlockItem v-for="(item, key) in dovodchiki" :key="key" :content="item" />
    </div>

    <h2 class="subtitle">
      Оконные ручки
    </h2>
    <div class="d-flex flex-wrap justify-content-around mt-n5 mt-n2">
      <BlockItem v-for="(item, key) in oRuchki" :key="key" :content="item" />
    </div>

    <SectionColors />

    <SectionBenefits second />

    <SectionFormMeasurer object="фурнитура" />

    <SectionFeedback />
  </div>
</template>
<script>
import BlockItem from '~/components/BlockItem.vue';
import SectionBenefits from '~/components/SectionBenefits.vue';
import SectionColors from '~/components/SectionColors.vue';
import SectionFeedback from '~/components/SectionFeedback.vue';

export default {
  name: 'AluminievieOkna',

  components: {
    BlockItem,
    SectionBenefits,
    SectionColors,
    SectionFeedback,
  },

  data() {
    return {
      nRuchki: [
        {
          img: '/uploads/items/fittings/pic-1.jpg',
          title: 'Гарнитура DORMA<br>или ELEMENTIS',
          description: ['Цвет: таблица цветов RAL'],
        },
        {
          img: '/uploads/items/fittings/pic-2.jpg',
          title: 'Итальянские нажимные<br>cгарнитуры',
          description: ['Цвет: таблица цветов RAL'],
        },
        {
          img: '/uploads/items/fittings/pic-3.jpg',
          title: 'Нажимной гарнитур<br>HOPPE London',
          description: ['Цвет: таблица цветов RAL'],
        },
        {
          img: '/uploads/items/fittings/pic-4.jpg',
          title: 'Нажимные гарнитуры<br>под покраску',
          description: ['Цвет: таблица цветов RAL'],
        },
        {
          img: '/uploads/items/fittings/pic-5.jpg',
          title: 'Нажимные гарнитуры<br>с ограничением доступа',
          description: ['Цвет: таблица цветов RAL'],
        },
      ],
      poruchni: [
        {
          img: '/uploads/items/fittings/pic-6.jpg',
          title: 'Поручни из матовой<br>нержавейки',
          description: ['Цвет: таблица цветов RAL'],
        },
        {
          img: '/uploads/items/fittings/pic-7.jpg',
          title: 'Поручни перфорированные<br> полированные',
          description: ['Цвет: таблица цветов RAL'],
        },
        {
          img: '/uploads/items/fittings/pic-8.jpg',
          title: 'Поручни под покраску',
          description: ['Цвет: таблица цветов RAL'],
        },
      ],
      skoby: [
        { img: '/uploads/items/fittings/pic-9.jpg', title: 'Разные ручки', description: ['Цвет: таблица цветов RAL'] },
        {
          img: '/uploads/items/fittings/pic-10.jpg',
          title: 'Ручки скобы из нержавейки',
          description: ['Цвет: таблица цветов RAL'],
        },
        {
          img: '/uploads/items/fittings/pic-11.jpg',
          title: 'Ручки скобы под покраску',
          description: ['Цвет: таблица цветов RAL'],
        },
        {
          img: '/uploads/items/fittings/pic-12.jpg',
          title: 'Треугольные ручки скобы',
          description: ['Цвет: таблица цветов RAL'],
        },
      ],
      dovodchiki: [
        {
          img: '/uploads/items/fittings/pic-13.jpg',
          title: 'Доводчики на рычаге',
          description: ['Цвет: таблица цветов RAL'],
        },
        {
          img: '/uploads/items/fittings/pic-14.jpg',
          title: 'Доводчики на скользящем<br>канале',
          description: ['Цвет: таблица цветов RAL'],
        },
        {
          img: '/uploads/items/fittings/pic-15.jpg',
          title: 'Маятниковые напольные<br>доводчики',
          description: ['Цвет: таблица цветов RAL'],
        },
        {
          img: '/uploads/items/fittings/pic-16.jpg',
          title: 'Скрытые доводчики',
          description: ['Цвет: таблица цветов RAL'],
        },
      ],
      oRuchki: [
        {
          img: '/uploads/items/fittings/pic-17.jpg',
          title: 'Оконные ручки и фурнитура',
          description: ['Цвет: таблица цветов RAL'],
        },
        {
          img: '/uploads/items/fittings/pic-18.jpg',
          title: 'Электроприводы',
          description: ['Цвет: таблица цветов RAL'],
        },
      ],
    };
  },

  head() {
    return {
      title: 'Фурнитура для алюминиевых конструкций',
      meta: [
        {
          name: 'description',
          content: 'Широкий выбор фурнитуры для всех типов алюминиевых конструкций в Москве и Московской области!',
        },
        {
          name: 'keywords',
          content: 'фурнитура для алюминиевых дверей окон купить москва московская область',
        },
      ],
    };
  },

  layout: 'pages',
};
</script>
