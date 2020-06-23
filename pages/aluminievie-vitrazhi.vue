<template>
  <div>
    <h1 class="title title_pages">
      Алюминиевые витражи
    </h1>

    <p class="text">
      <strong class="text_bold">Алюминиевый витраж</strong> может быть прозрачным и&nbsp;непрозрачным
      и&nbsp;использоваться во&nbsp;входных дверях, остеклении веранд и&nbsp;помещений. Витраж придает вашим окнам,
      дверям, балконным блокам уникальности, добавляя изысканные детали.
    </p>

    <h2 class="subtitle">
      Посмотрите пример алюминиевого<br class="d-none d-sm-block" />
      витража, который мы&nbsp;установили:
    </h2>

    <img src="/uploads/examples/stained-glass-window.jpg" alt="" class="img mb-4" />

    <SectionBenefits />

    <SectionBenefits second />

    <SectionFormMeasurer object="витраж" />

    <SectionFeedback />
  </div>
</template>

<script>
import SectionBenefits from '~/components/SectionBenefits.vue';
import SectionFormMeasurer from '~/components/SectionFormMeasurer.vue';
import SectionFeedback from '~/components/SectionFeedback.vue';

export default {
  name: 'AluminievieVitrazhi',

  components: {
    SectionBenefits,
    SectionFormMeasurer,
    SectionFeedback,
  },

  head() {
    return {
      title: 'Алюминиевые витражи от производителя',
      meta: [
        {
          name: 'description',
          content: 'Производство и монтаж алюминиевых витражей по низким ценам в Москве и Московской области',
        },
        {
          name: 'keywords',
          content: 'алюминиевые витражи от производителя купить цена москва московская область',
        },
      ],
    };
  },

  layout: 'pages',
};
</script>
