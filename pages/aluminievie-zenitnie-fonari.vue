<template>
  <div>
    <h1 class="title title_pages">
      Зенитные фонари
    </h1>

    <p class="text">
      <strong class="text_bold">Зенитный фонарь или световой фонарь</strong>&nbsp;&mdash; остеклённая часть кровельного
      покрытия, предназначенная для естественного освещения. Конструкции могут быть как с&nbsp;открыванием
      (электропривод, ручной привод), так и&nbsp;&laquo;глухие&raquo;&nbsp;&mdash; не&nbsp;открывающиеся.
    </p>

    <h2 class="subtitle">
      Посмотрите пример зенитного<br class="d-none d-sm-block" />
      фонаря, который мы&nbsp;установили:
    </h2>

    <img src="/uploads/examples/clerestories.jpg" alt="" class="img mb-4" />

    <SectionBenefits />

    <SectionBenefits second />

    <SectionFormMeasurer object="зенитный фонарь" />

    <SectionFeedback />
  </div>
</template>
<script>
import SectionBenefits from '~/components/SectionBenefits.vue';
import SectionFormMeasurer from '~/components/SectionFormMeasurer.vue';
import SectionFeedback from '~/components/SectionFeedback.vue';

export default {
  name: 'AluminievieZenitnieFonari',

  components: {
    SectionBenefits,
    SectionFormMeasurer,
    SectionFeedback,
  },

  head() {
    return {
      title: 'Алюминиевые зенитные фонари от производителя',
      meta: [
        {
          name: 'description',
          content:
            'Производство и монтаж алюминиевых зенитных фонарей в Москве и Московской области без наценок, с опытом более 10 лет!',
        },
        {
          name: 'keywords',
          content:
            'зенитные фонари световой фонарь алюминивые зенитные фонари алюмарк купить недорого москва московская область',
        },
      ],
    };
  },

  layout: 'pages',
};
</script>
