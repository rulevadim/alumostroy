<template>
  <div class="d-flex flex-wrap flex-md-nowrap justify-content-around">
    <template v-if="!second">
      <SectionBenefitsBenefit :img="require('~/assets/svg/bullet-coins-c.svg?include')">
        <template v-slot:title>Никаких наценок</template>
        Мы&nbsp;являемся производителями,<br />поэтому наши цены ниже,<br />чем у&nbsp;конкурентов
      </SectionBenefitsBenefit>
      <SectionBenefitsBenefit :img="require('~/assets/svg/bullet-trophy-c.svg?include')">
        <template v-slot:title>Опыт более 10 лет</template>
        Давно успешно устанавливаем<br />алюминиевые конструкции<br />нашим клиентам
      </SectionBenefitsBenefit>
      <SectionBenefitsBenefit :img="require('~/assets/svg/bullet-hands-c.svg?include')">
        <template v-slot:title>Гарантия — 3 года</template>
        Плюс 1&nbsp;год бесплатного<br />технического обслуживания.<br />Это прописывается<br />в&nbsp;договоре
      </SectionBenefitsBenefit>
    </template>
    <template v-else>
      <SectionBenefitsBenefit :img="require('~/assets/svg/bullet-delivery-c.svg?include')">
        <template v-slot:title>Бесплатная доставка</template>
        Доставим алюминиевые<br />конструкции до&nbsp;вашего объекта
      </SectionBenefitsBenefit>
      <SectionBenefitsBenefit :img="require('~/assets/svg/bullet-certification-c.svg?include')">
        <template v-slot:title>Работаем по&nbsp;договору</template>
        В&nbsp;нём&nbsp;мы&nbsp;чётко прописываем<br />перечень работ, их&nbsp;стоимость<br />и&nbsp;сроки выполнения
      </SectionBenefitsBenefit>
      <SectionBenefitsBenefit :img="require('~/assets/svg/bullet-discount-c.svg?include')">
        <template v-slot:title>Скидки до&nbsp;18%</template>
        Специальные предложения<br />для оптовых клиентов,<br />при&nbsp;заказе от&nbsp;1000м&sup2;
      </SectionBenefitsBenefit>
    </template>
  </div>
</template>

<script>
import SectionBenefitsBenefit from '~/components/SectionBenefitsBenefit.vue';

export default {
  name: 'SectionBenefits',
  components: {
    SectionBenefitsBenefit,
  },
  props: { second: { type: Boolean } },
};
</script>
