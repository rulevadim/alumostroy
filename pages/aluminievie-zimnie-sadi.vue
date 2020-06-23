<template>
  <div>
    <h1 class="title title_pages">
      Зимние сады <br class="d-none d-lg-block" />
      от&nbsp;производителя
    </h1>

    <p class="text">
      <strong class="text_bold">Зимний сад</strong>&nbsp;&mdash; это сооружение с&nbsp;прозрачными стенами
      и&nbsp;крышей, стоящее отдельно от&nbsp;дома, либо как пристройка к&nbsp;нему. Изготовление зимних садов лучше
      всего производить из&nbsp;&laquo;теплого&raquo; алюминиевого профиля, учитывая климат нашего региона и&nbsp;цены
      на&nbsp;материалы. Панорамное остекление алюминиевых зимних садов и&nbsp;террас пользуется большой популярностью
      среди жителей коттеджных поселков, владельцев ресторанов, кафе и&nbsp;салонов красоты. Вы&nbsp;можете выбрать, как
      &laquo;теплый&raquo;, так и&nbsp;&laquo;холодный&raquo; вариант, в&nbsp;зависимости от&nbsp;ваших потребностей
      и&nbsp;предпочтений.
    </p>

    <h2 class="subtitle">
      Посмотрите пример зимнего сада,<br class="d-none d-sm-block" />
      который мы&nbsp;установили:
    </h2>

    <img src="/uploads/examples/winter-garden.jpg" alt="" class="img mb-4" />

    <SectionBenefits />

    <SectionBenefits second />

    <SectionFormMeasurer object="зимний сад" />

    <SectionFeedback />
  </div>
</template>

<script>
import SectionBenefits from '~/components/SectionBenefits.vue';
import SectionFormMeasurer from '~/components/SectionFormMeasurer.vue';
import SectionFeedback from '~/components/SectionFeedback.vue';

export default {
  name: 'AluminievieZimnieSadi',

  components: {
    SectionBenefits,
    SectionFormMeasurer,
    SectionFeedback,
  },

  head() {
    return {
      title: 'Производство зимних садов из алюминия',
      meta: [
        {
          name: 'description',
          content: 'Производство и монтаж алюминиевых зимних садов в Москве и Московской области по низким ценам',
        },
        {
          name: 'keywords',
          content: 'алюминиевые зимние сады из алюминия купить монтаж недорого Москва Московская область',
        },
      ],
    };
  },

  layout: 'pages',
};
</script>
