<template>
  <div>
    <h1 class="title title_pages">
      Алюминиевые офисные перегородки
    </h1>

    <p class="text">
      <strong class="text_bold">Алюминиевые перегородки</strong>&nbsp;&mdash; современный способ разделить пространство
      помещения. Стеклянные перегородки позволяют эффективно разделить офис, при этом оставив возможность для контроля
      за&nbsp;работниками. С&nbsp;точки зрения архитектуры и&nbsp;дизайна помещения прозрачное разделение пространства
      оставляет много света и&nbsp;офис выглядит большим, свободным и&nbsp;объемным.
    </p>

    <h2 class="subtitle">
      Посмотрите пример алюминиевой<br class="d-none d-sm-block" />
      перегородки, которую мы&nbsp;установили:
    </h2>

    <img src="/uploads/examples/partitions.jpg" alt="" class="img mb-4" />

    <SectionBenefits />

    <SectionBenefits second />

    <SectionFormMeasurer object="офисная перегородка" />

    <SectionFeedback />
  </div>
</template>

<script>
import SectionBenefits from '~/components/SectionBenefits.vue';
import SectionFormMeasurer from '~/components/SectionFormMeasurer.vue';
import SectionFeedback from '~/components/SectionFeedback.vue';

export default {
  name: 'AluminievieOfisniePeregorodki',

  components: {
    SectionBenefits,
    SectionFormMeasurer,
    SectionFeedback,
  },

  head() {
    return {
      title: 'Офисные перегородки из алюминия',
      meta: [
        {
          name: 'description',
          content:
            'Производство и монтаж алюминиевых офисных перегородок по низким ценам в Москве и Московской области',
        },
        {
          name: 'keywords',
          content: 'офисные перегородки из алюминия заказать москва московская область недорого',
        },
      ],
    };
  },

  layout: 'pages',
};
</script>
