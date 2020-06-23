<template>
  <div>
    <h1 class="title title_pages">
      Алюминиевые входные группы
    </h1>

    <p class="text">
      <strong class="text_bold">Входные группы</strong>&mdash;&nbsp;это не&nbsp;только эффектный способ оформления
      фасадов, но&nbsp;и&nbsp;один из&nbsp;способов экономить внутреннюю тепловую энергию зданий и&nbsp;повысить
      их&nbsp;безопасность.
    </p>

    <h2 class="subtitle">
      Посмотрите пример входной<br class="d-none d-sm-block" />
      группы, которую мы&nbsp;установили:
    </h2>

    <img src="/uploads/examples/entry-groups.jpg" alt="" class="img mb-4" />

    <SectionBenefits />

    <SectionBenefits second />

    <SectionFormMeasurer object="входная группа" />

    <SectionFeedback />
  </div>
</template>

<script>
import SectionBenefits from '~/components/SectionBenefits.vue';
import SectionFormMeasurer from '~/components/SectionFormMeasurer.vue';
import SectionFeedback from '~/components/SectionFeedback.vue';

export default {
  name: 'AluminievieVhodnieGruppi',

  components: {
    SectionBenefits,
    SectionFormMeasurer,
    SectionFeedback,
  },

  head() {
    return {
      title: 'Алюминиевые входные группы от производителя',
      meta: [
        {
          name: 'description',
          content: 'Производство алюминиевых входных групп по низким ценам в Москве и Московской области',
        },
        {
          name: 'keywords',
          content: 'алюминиевые входные группы заказать цена москва и московская область',
        },
      ],
    };
  },

  layout: 'pages',
};
</script>
