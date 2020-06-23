<template>
  <div>
    <h1 class="title title_pages">
      Алюминиевые двери
    </h1>

    <SectionBenefits />

    <h2 class="subtitle">
      Холодные алюминиевые двери
    </h2>
    <div class="d-flex flex-wrap justify-content-around justify-content-lg-between mt-n5 mx-n2">
      <BlockItem v-for="(item, key) in coldDoors" :key="key" :content="item" />
    </div>

    <h2 class="subtitle">
      Теплые алюминиевые двери
    </h2>
    <div class="d-flex flex-wrap justify-content-around justify-content-lg-between mt-n5 mx-n2">
      <BlockItem v-for="(item, key) in warmDoors" :key="key" :content="item" />
    </div>

    <SectionColors />

    <SectionBenefits second />

    <SectionFormMeasurer object="дверь" />

    <SectionFeedback />
  </div>
</template>
<script>
import BlockItem from '~/components/BlockItem.vue';
import SectionBenefits from '~/components/SectionBenefits.vue';
import SectionColors from '~/components/SectionColors.vue';
import SectionFormMeasurer from '~/components/SectionFormMeasurer.vue';
import SectionFeedback from '~/components/SectionFeedback.vue';

export default {
  name: 'AluminievieDveri',

  components: {
    BlockItem,
    SectionBenefits,
    SectionColors,
    SectionFormMeasurer,
    SectionFeedback,
  },

  data() {
    return {
      coldDoors: [
        {
          img: 'uploads/items/doors/cold/item-1.jpg',
          title: 'Алюминиевая дверь №10<br />ALUMARK S-44 890 Х 2080',
          description: [
            'Стеклопакет 24 мм',
            'Стекло 5 мм',
            'Ручка-скоба – 1 комплект',
            'Петли 2-секционные',
            '(GIESSE) – 3 шт',
            'Замок – 1 комплект',
            'Доводчик – 1 шт',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/doors/cold/item-2.jpg',
          title: 'Алюминиевая дверь №11<br />ALUMARK S-44 890 Х 2080',
          description: [
            'Стеклопакет 24 мм',
            'Стекло 5 мм',
            'Ручка-скоба – 1 комплект',
            'Петли 2-секционные',
            '(GIESSE) – 3 шт',
            'Замок – 1 комплект',
            'Доводчик – 1 шт',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/doors/cold/item-3.jpg',
          title: 'Алюминиевая дверь №12<br />ALUMARK S-44 890 Х 2080',
          description: [
            'Пенополистирол 24 мм',
            'Ручка-скоба – 1 комплект',
            'Петли 2-секционные',
            '(GIESSE) – 3 шт',
            'Замок – 1 комплект',
            'Доводчик – 1 шт',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/doors/cold/item-4.jpg',
          title: 'Алюминиевая дверь №13<br />ALUMARK S-44 1450 Х 2100',
          description: [
            'Стеклопакет 24 мм',
            'Стекло 5 мм',
            'Ручка-скоба – 1 комплект',
            'Петли 2-секционные',
            '(GIESSE) – 3 шт',
            'Замок – 1 комплект',
            'Доводчик – 1 шт',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/doors/cold/item-5.jpg',
          title: 'Алюминиевая дверь №14<br />ALUMARK S-44 1450 Х 2100',
          description: [
            'Стеклопакет 24 мм',
            'Стекло 5 мм',
            'Ручка-скоба – 1 комплект',
            'Петли 2-секционные',
            '(GIESSE) – 3 шт',
            'Замок – 1 комплект',
            'Доводчик – 1 шт',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/doors/cold/item-6.jpg',
          title: 'Алюминиевая дверь №15<br />ALUMARK S-44 1450 Х 2100',
          description: [
            'Пенополистирол 24 мм',
            'Ручка-скоба – 1 комплект',
            'Петли 2-секционные',
            '(GIESSE) – 3 шт',
            'Замок – 1 комплект',
            'Доводчик – 1 шт',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/doors/cold/item-7.jpg',
          title: 'Алюминиевая дверь №16<br />ALUMARK S-44 1750 Х 2100',
          description: [
            'Стеклопакет 24 мм',
            'Стекло 5 мм',
            'Ручка-скоба – 1 комплект',
            'Петли 2-секционные',
            '(GIESSE) – 3 шт',
            'Замок – 1 комплект',
            'Доводчик – 1 шт',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/doors/cold/item-8.jpg',
          title: 'Алюминиевая дверь №17<br />ALUMARK S-44 1750 Х 2100',
          description: [
            'Стеклопакет 24 мм',
            'Стекло 5 мм',
            'Ручка-скоба – 1 комплект',
            'Петли 2-секционные',
            '(GIESSE) – 3 шт',
            'Замок – 1 комплект',
            'Доводчик – 1 шт',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/doors/cold/item-9.jpg',
          title: 'Алюминиевая дверь №18<br />ALUMARK S-44 1750 Х 2100',
          description: [
            'Пенополистирол 24 мм',
            'Ручка-скоба – 1 комплект',
            'Петли 2-секционные',
            '(GIESSE) – 3 шт',
            'Замок – 1 комплект',
            'Доводчик – 1 шт',
            'Цвет: таблица цветов RAL',
          ],
        },
      ],
      warmDoors: [
        {
          img: 'uploads/items/doors/warm/item-1.jpg',
          title: 'Алюминиевая дверь №10<br />ALUMARK S-70 890 Х 2080',
          description: [
            'Стеклопакет 24 мм',
            'Стеклопакет 32 мм DS',
            'Ручка-скоба – 1 комплект',
            'Петли 2-секционные',
            '(GIESSE) – 3 шт',
            'Замок – 1 комплект',
            'Доводчик – 1 шт',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/doors/warm/item-2.jpg',
          title: 'Алюминиевая дверь №11<br />ALUMARK S-70 890 Х 2080',
          description: [
            'Стеклопакет 24 мм',
            'Стеклопакет 32 мм DS',
            'Ручка-скоба – 1 комплект',
            'Петли 2-секционные',
            '(GIESSE) – 3 шт',
            'Замок – 1 комплект',
            'Доводчик – 1 шт',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/doors/warm/item-3.jpg',
          title: 'Алюминиевая дверь №12<br />ALUMARK S-70 890 Х 2080',
          description: [
            'Пенополистирол 24 мм',
            'Пенополистирол 32 мм',
            'Ручка-скоба – 1 комплект',
            'Петли 2-секционные',
            '(GIESSE) – 3 шт',
            'Замок – 1 комплект',
            'Доводчик – 1 шт',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/doors/warm/item-4.jpg',
          title: 'Алюминиевая дверь №13<br />ALUMARK S-70 1450 Х 2100',
          description: [
            'Стеклопакет 24 мм',
            'Стеклопакет 32 мм DS',
            'Ручка-скоба – 1 комплект',
            'Петли 2-секционные',
            '(GIESSE) – 3 шт',
            'Замок – 1 комплект',
            'Доводчик – 1 шт',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/doors/warm/item-5.jpg',
          title: 'Алюминиевая дверь №14<br />ALUMARK S-70 1450 Х 2100',
          description: [
            'Стеклопакет 24 мм',
            'Стеклопакет 32 мм DS',
            'Ручка-скоба – 1 комплект',
            'Петли 2-секционные',
            '(GIESSE) – 3 шт',
            'Замок – 1 комплект',
            'Доводчик – 1 шт',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/doors/warm/item-6.jpg',
          title: 'Алюминиевая дверь №15<br />ALUMARK S-70 1450 Х 2100',
          description: [
            'Пенополистирол 24 мм',
            'Пенополистирол 32 мм',
            'Ручка-скоба – 1 комплект',
            'Петли 2-секционные',
            '(GIESSE) – 3 шт',
            'Замок – 1 комплект',
            'Доводчик – 1 шт',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/doors/warm/item-7.jpg',
          title: 'Алюминиевая дверь №16<br />ALUMARK S-70 1750 Х 2100',
          description: [
            'Стеклопакет 24 мм',
            'Стеклопакет 32 мм DS',
            'Ручка-скоба – 1 комплект',
            'Петли 2-секционные',
            '(GIESSE) – 3 шт',
            'Замок – 1 комплект',
            'Доводчик – 1 шт',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/doors/warm/item-8.jpg',
          title: 'Алюминиевая дверь №17<br />ALUMARK S-70 1750 Х 2100',
          description: [
            'Стеклопакет 24 мм',
            'Стеклопакет 32 мм DS',
            'Ручка-скоба – 1 комплект',
            'Петли 2-секционные',
            '(GIESSE) – 3 шт',
            'Замок – 1 комплект',
            'Доводчик – 1 шт',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/doors/warm/item-9.jpg',
          title: 'Алюминиевая дверь №18<br />ALUMARK S-70 1750 Х 2100',
          description: [
            'Пенополистирол 24 мм',
            'Пенополистирол 32 мм',
            'Ручка-скоба – 1 комплект',
            'Петли 2-секционные',
            '(GIESSE) – 3 шт',
            'Замок – 1 комплект',
            'Доводчик – 1 шт',
            'Цвет: таблица цветов RAL',
          ],
        },
      ],
    };
  },

  head() {
    return {
      title: 'Алюминиевые двери от производителя',
      meta: [
        {
          name: 'description',
          content: 'Производство и монтаж алюминиевых дверей в Москве и Московской области по низкой цене',
        },
        {
          name: 'keywords',
          content: 'алюминиевые двери от производителя купить низкая цена монтаж москва',
        },
      ],
    };
  },

  layout: 'pages',
};
</script>
