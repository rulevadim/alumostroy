<template>
  <div>
    <h1 class="title title_pages">
      Алюминиевые фасады <br class="d-none d-lg-block" />
      от&nbsp;производителя
    </h1>

    <p class="text">
      <strong class="text_bold">Фасадное остекление</strong>&nbsp;&mdash; часто встречающийся элемент современной
      городской архитектуры. Всё чаще при строительстве торговых или офисных центров используются прозрачные фасады или
      панорамные окна от&nbsp;пола до&nbsp;потолка. В&nbsp;сфере многоэтажного и&nbsp;частного строительства эта
      традиция также отражена в&nbsp;самых популярных на&nbsp;сегодняшний день стилях: хай-тек, био-тек, модерн
      и&nbsp;минимализм.
    </p>

    <strong class="text text_bold">Преимущества алюминиевого фасадного остекления:</strong>
    <ul class="text">
      <li>Алюминий не&nbsp;окисляется и&nbsp;не&nbsp;боится агрессивных химических соединений;</li>
      <li>Прочные алюминиевые профили позволяют создавать конструкции любой сложности;</li>
      <li>
        Алюминиевые фасады можно устанавливать как на&nbsp;новых зданиях, так и&nbsp;на&nbsp;старых с&nbsp;высоким
        процентом физического износа фасадных стен.
      </li>
    </ul>

    <h2 class="subtitle">
      Посмотрите пример фасадного остекления, которое мы&nbsp;сделали:
    </h2>

    <img src="uploads/examples/facades.jpg" alt="" class="img mb-4" />

    <SectionBenefits />

    <SectionBenefits second />

    <SectionFormMeasurer object="фасад" />

    <SectionFeedback />
  </div>
</template>
<script>
import SectionBenefits from '~/components/SectionBenefits.vue';
import SectionFormMeasurer from '~/components/SectionFormMeasurer.vue';
import SectionFeedback from '~/components/SectionFeedback.vue';

export default {
  name: 'AluminievieFasadi',

  components: {
    SectionBenefits,
    SectionFormMeasurer,
    SectionFeedback,
  },

  head() {
    return {
      title: 'Алюминиевые фасады от производителя',
      meta: [
        {
          name: 'description',
          content: 'Производство и монтаж алюминиевых фасадов в Москве и Московской области по низким ценам',
        },
        {
          name: 'keywords',
          content: 'алюминиевые фасады купить производство алюминиевых фасадов москва недорого',
        },
      ],
    };
  },

  layout: 'pages',
};
</script>
