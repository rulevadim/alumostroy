<template>
  <div>
    <h1 class="title title_pages">
      Алюминиевые окна <br class="d-none d-lg-block" />
      от&nbsp;производителя
    </h1>

    <SectionBenefits />

    <h2 class="subtitle">
      Холодные алюминиевые окна
    </h2>
    <div class="d-flex flex-wrap justify-content-around justify-content-lg-between mt-n5 mx-n2">
      <BlockItem v-for="(item, key) in coldWindows" :key="key" :content="item" />
    </div>

    <h2 class="subtitle">
      Теплые алюминиевые окна
    </h2>
    <div class="d-flex flex-wrap justify-content-around justify-content-lg-between mt-n5 mt-n2">
      <BlockItem v-for="(item, key) in warmWindows" :key="key" :content="item" />
    </div>

    <SectionColors />

    <SectionBenefits second />

    <SectionFormMeasurer object="окно" />

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
  name: 'AluminievieOkna',

  components: {
    BlockItem,
    SectionBenefits,
    SectionColors,
    SectionFormMeasurer,
    SectionFeedback,
  },

  data() {
    return {
      coldWindows: [
        {
          img: 'uploads/items/windows/cold/item-1.jpg',
          title: 'Алюминиевое окно №1<br />ALUMARK S-44 920 Х 960',
          description: ['Стеклопакет 24 мм', 'Стекло 5 мм', 'Цвет: таблица цветов RAL'],
        },
        {
          img: 'uploads/items/windows/cold/item-2.jpg',
          title: 'Алюминиевое окно №2<br />ALUMARK S-44 920 Х 960',
          description: ['Стеклопакет 24 мм', 'Стекло 5 мм', 'Фурнитура GIESSE (Италия)', 'Цвет: таблица цветов RAL'],
        },
        {
          img: 'uploads/items/windows/cold/item-3.jpg',
          title: 'Алюминиевое окно №3<br />ALUMARK S-44 920 Х 960',
          description: ['Стеклопакет 24 мм', 'Стекло 5 мм', 'Фурнитура GIESSE (Италия)', 'Цвет: таблица цветов RAL'],
        },
        {
          img: 'uploads/items/windows/cold/item-4.jpg',
          title: 'Алюминиевое окно №4<br />ALUMARK S-44 1420 Х 960',
          description: ['Стеклопакет 24 мм', 'Стекло 5 мм', 'Цвет: таблица цветов RAL'],
        },
        {
          img: 'uploads/items/windows/cold/item-5.jpg',
          title: 'Алюминиевое окно №5<br />ALUMARK S-44 1420 Х 960',
          description: ['Стеклопакет 24 мм', 'Стекло 5 мм', 'Фурнитура GIESSE (Италия)', 'Цвет: таблица цветов RAL'],
        },
        {
          img: 'uploads/items/windows/cold/item-6.jpg',
          title: 'Алюминиевое окно №6<br />ALUMARK S-44 1420 Х 960',
          description: ['Стеклопакет 24 мм', 'Стекло 5 мм', 'Фурнитура GIESSE (Италия)', 'Цвет: таблица цветов RAL'],
        },
        {
          img: 'uploads/items/windows/cold/item-7.jpg',
          title: 'Алюминиевое окно №7<br />ALUMARK S-44 1720 Х 960',
          description: ['Стеклопакет 24 мм', 'Стекло 5 мм', 'Фурнитура GIESSE (Италия)', 'Цвет: таблица цветов RAL'],
        },
        {
          img: 'uploads/items/windows/cold/item-8.jpg',
          title: 'Алюминиевое окно №8<br />ALUMARK S-44 1720 Х 960',
          description: ['Стеклопакет 24 мм', 'Стекло 5 мм', 'Фурнитура GIESSE (Италия)', 'Цвет: таблица цветов RAL'],
        },
        {
          img: 'uploads/items/windows/cold/item-9.jpg',
          title: 'Алюминиевое окно №9<br />ALUMARK S-44 1720 Х 960',
          description: ['Стеклопакет 24 мм', 'Стекло 5 мм', 'Фурнитура GIESSE (Италия)', 'Цвет: таблица цветов RAL'],
        },
      ],
      warmWindows: [
        {
          img: 'uploads/items/windows/warm/item-1.jpg',
          title: 'Алюминиевое окно №1<br />ALUMARK S-70 920 Х 960',
          description: ['Стеклопакет 24 мм', 'Стеклопакет 32 мм DS', 'Цвет: таблица цветов RAL'],
        },
        {
          img: 'uploads/items/windows/warm/item-2.jpg',
          title: 'Алюминиевое окно №2<br />ALUMARK S-70 920 Х 960',
          description: [
            'Стеклопакет 24 мм',
            'Стеклопакет 32 мм DS',
            'Фурнитура GIESSE (Италия)',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/windows/warm/item-3.jpg',
          title: 'Алюминиевое окно №3<br />ALUMARK S-70 920 Х 960',
          description: [
            'Стеклопакет 24 мм',
            'Стеклопакет 32 мм DS',
            'Фурнитура GIESSE (Италия)',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/windows/warm/item-4.jpg',
          title: 'Алюминиевое окно №4<br />ALUMARK S-70 1420 Х 960',
          description: ['Стеклопакет 24 мм', 'Стеклопакет 32 мм DS', 'Цвет: таблица цветов RAL'],
        },
        {
          img: 'uploads/items/windows/warm/item-5.jpg',
          title: 'Алюминиевое окно №5<br />ALUMARK S-70 1420 Х 960',
          description: [
            'Стеклопакет 24 мм',
            'Стеклопакет 32 мм DS',
            'Фурнитура GIESSE (Италия)',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/windows/warm/item-6.jpg',
          title: 'Алюминиевое окно №6<br />ALUMARK S-70 1420 Х 960',
          description: [
            'Стеклопакет 24 мм',
            'Стеклопакет 32 мм DS',
            'Фурнитура GIESSE (Италия)',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/windows/warm/item-7.jpg',
          title: 'Алюминиевое окно №7<br />ALUMARK S-70 1720 Х 960',
          description: [
            'Стеклопакет 24 мм',
            'Стеклопакет 32 мм DS',
            'Фурнитура GIESSE (Италия)',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/windows/warm/item-8.jpg',
          title: 'Алюминиевое окно №8<br />ALUMARK S-70 1720 Х 960',
          description: [
            'Стеклопакет 24 мм',
            'Стеклопакет 32 мм DS',
            'Фурнитура GIESSE (Италия)',
            'Цвет: таблица цветов RAL',
          ],
        },
        {
          img: 'uploads/items/windows/warm/item-9.jpg',
          title: 'Алюминиевое окно №9<br />ALUMARK S-70 1720 Х 960',
          description: [
            'Стеклопакет 24 мм',
            'Стеклопакет 32 мм DS',
            'Фурнитура GIESSE (Италия)',
            'Цвет: таблица цветов RAL',
          ],
        },
      ],
    };
  },

  head() {
    return {
      title: 'Алюминиевые окна от производителя в Москве и Московской области',
      meta: [
        {
          name: 'description',
          content: 'Производство и монтаж алюминиевых окон в Москве и Московской области недорого',
        },
        {
          name: 'keywords',
          content: 'люминиевые окна производство окна из алюминия купить монтаж москва мо',
        },
      ],
    };
  },

  layout: 'pages',
};
</script>
