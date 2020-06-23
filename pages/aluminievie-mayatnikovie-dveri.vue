<template>
  <div>
    <h1 class="title title_pages">
      Маятниковые двери из&nbsp;алюминия
    </h1>

    <p class="text">
      <strong class="text_bold">Маятниковые двери</strong>&nbsp;&mdash; отличный способ повысить пропускную способность
      входных групп. Это качество очень важно для зданий, с&nbsp;большим ежедневным количеством посетителей&nbsp;&mdash;
      магазинов, государственных учреждений, офисных и&nbsp;промышленных помещений.
    </p>

    <h2 class="subtitle">
      Посмотрите пример маятниковых<br class="d-none d-sm-block" />
      дверей, которые мы&nbsp;установили:
    </h2>

    <img src="/uploads/examples/pendulum-doors.jpg" alt="" class="img mb-4" />

    <SectionBenefits />

    <SectionBenefits second />

    <SectionFormMeasurer object="маятниковая дверь" />

    <SectionFeedback />
  </div>
</template>

<script>
import SectionBenefits from '~/components/SectionBenefits.vue';
import SectionFormMeasurer from '~/components/SectionFormMeasurer.vue';
import SectionFeedback from '~/components/SectionFeedback.vue';

export default {
  name: 'AluminievieMayatnikovieDveri',

  components: {
    SectionBenefits,
    SectionFormMeasurer,
    SectionFeedback,
  },

  head() {
    return {
      title: 'Производство алюминиевых маятниковых дверей',
      meta: [
        {
          name: 'description',
          content: 'Производство и монтаж алюминиевых маятниковых дверей в Москве и Московской области',
        },
        {
          name: 'keywords',
          content: 'алюминиевые маятниковые двери из алюминия купить москва московская область недорого',
        },
      ],
    };
  },

  layout: 'pages',
};
</script>
