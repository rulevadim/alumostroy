<template>
  <section id="block_4" class="calculator section-padding-bottom">
    <VPicture
      classes="calculator__bg"
      :webp="require('~/assets/img/bg-calculator.png?webp')"
      :png="require('~/assets/img/bg-calculator.png')"
    />
    <div class="container">
      <div class="title font_white">
        Посчитайте стоимость алюминиевых конструкций на&nbsp;ваш&nbsp;объект
      </div>
      <div class="description font_white">
        Калькулятор даёт примерный рассчёт стоимости, исходя из&nbsp;самых низких расценок на&nbsp;материалы. Более
        подробный рассчёт можно получить оставив заявку.
      </div>
      <div class="row justify-content-center wrapper-calculate__inner">
        <div class="col-12 col-sm-6 col-lg-auto">
          <div class="calculator__block-1 calc-block">
            <div class="calc-block__title">01</div>
            <div class="calc-block__description">
              Выберите интересующую<br />
              вас продукцию:
            </div>
            <select v-model="selectedType" name="object" size="1" class="calc-block__select">
              <option v-for="type in productTypes" :key="type" :value="type">
                {{ type }}
              </option>
            </select>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-auto">
          <div class="calculator__block-2 calc-block">
            <div class="calc-block__title">02</div>
            <div class="calc-block__description">
              Тёплые<br />
              или холодные:
            </div>
            <select v-model="selectedTemp" name="type" size="1" class="calc-block__select">
              <option v-for="type in tempTypes" :key="type" :value="type">
                {{ type }}
              </option>
            </select>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-auto">
          <div class="calculator__block-3 calc-block">
            <div class="calc-block__title">03</div>
            <div class="calc-block__description">Выберите<br />метраж, м&sup2;</div>
            <input
              v-model.number="footage"
              type="number"
              name="footage"
              class="calc-block__input"
              min="0"
              max="10000"
            />
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-auto calculator__result-container">
          <div class="calculator__block-result calc-block">
            <svg
              class="calc-block__icon"
              style="fill: currentColor;"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 448 512"
            >
              <path
                d="M400 0H48C22.4 0 0 22.4 0 48v416c0 25.6 22.4 48 48 48h352c25.6 0 48-22.4 48-48V48c0-25.6-22.4-48-48-48zM128 435.2c0 6.4-6.4 12.8-12.8 12.8H76.8c-6.4 0-12.8-6.4-12.8-12.8v-38.4c0-6.4 6.4-12.8 12.8-12.8h38.4c6.4 0 12.8 6.4 12.8 12.8v38.4zm0-128c0 6.4-6.4 12.8-12.8 12.8H76.8c-6.4 0-12.8-6.4-12.8-12.8v-38.4c0-6.4 6.4-12.8 12.8-12.8h38.4c6.4 0 12.8 6.4 12.8 12.8v38.4zm128 128c0 6.4-6.4 12.8-12.8 12.8h-38.4c-6.4 0-12.8-6.4-12.8-12.8v-38.4c0-6.4 6.4-12.8 12.8-12.8h38.4c6.4 0 12.8 6.4 12.8 12.8v38.4zm0-128c0 6.4-6.4 12.8-12.8 12.8h-38.4c-6.4 0-12.8-6.4-12.8-12.8v-38.4c0-6.4 6.4-12.8 12.8-12.8h38.4c6.4 0 12.8 6.4 12.8 12.8v38.4zm128 128c0 6.4-6.4 12.8-12.8 12.8h-38.4c-6.4 0-12.8-6.4-12.8-12.8V268.8c0-6.4 6.4-12.8 12.8-12.8h38.4c6.4 0 12.8 6.4 12.8 12.8v166.4zm0-256c0 6.4-6.4 12.8-12.8 12.8H76.8c-6.4 0-12.8-6.4-12.8-12.8V76.8C64 70.4 70.4 64 76.8 64h294.4c6.4 0 12.8 6.4 12.8 12.8v102.4z"
              />
            </svg>
            <div class="calc-block__description">
              Примерная<br />
              стоимость:
            </div>
            <div class="calc-block__price">{{ resultCost }} ₽</div>
          </div>
        </div>
      </div>
      <div class="title font_white">Оставьте заявку</div>
      <div class="description font_white">на&nbsp;более подробный расчет</div>
      <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">
          <form ref="form" action="./contact.php" method="post">
            <div class="row">
              <div class="col-12 col-lg-6">
                <textarea
                  name="comment"
                  class="form-element calculator__comment"
                  placeholder="Ваши комментарии"
                ></textarea>
              </div>
              <div class="col-12 col-lg-6">
                <input
                  ref="phone"
                  type="text"
                  name="phone"
                  class="form-element form-phone calculator__phone"
                  placeholder="Введите Ваш телефон"
                />
                <input type="submit" value="Получить расчёт" class="form-element form-submit calculator__submit" />
              </div>
            </div>
            <input type="hidden" name="location" value="[alumostroy.ru] Форма заявки на подробный расчет" />
          </form>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
export default {
  name: 'SectionCalculator',

  data() {
    return {
      selectedType: 'Окна',
      selectedTemp: 'Теплые',
      footage: 1,

      productTypes: [
        'Окна',
        'Двери',
        'Фасады',
        'Перегородки',
        'Витражи',
        'Зимние сады',
        'Входные группы',
        'Зенитные фонари',
        'Маятниковые двери',
      ],

      tempTypes: ['Теплые', 'Холодные'],

      cost: {
        Окна: {
          Теплые: 6595,
          Холодные: 3750,
        },
        Двери: {
          Теплые: 23455,
          Холодные: 12210,
        },
        Фасады: {
          Теплые: 4959,
          Холодные: 4650,
        },
        Перегородки: {
          Теплые: 3688,
          Холодные: 3688,
        },
        Витражи: {
          Теплые: 5825,
          Холодные: 4658,
        },
        'Зимние сады': {
          Теплые: 8965,
          Холодные: 6520,
        },
        'Входные группы': {
          Теплые: 18650,
          Холодные: 12965,
        },
        'Зенитные фонари': {
          Теплые: 9365,
          Холодные: 7759,
        },
        'Маятниковые двери': {
          Теплые: 19632,
          Холодные: 14398,
        },
      },
    };
  },

  computed: {
    resultCost() {
      const result = this.cost[this.selectedType][this.selectedTemp] * this.footage;
      return result.toFixed(0).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
    },
  },

  mounted() {
    this.$Inputmask(this.$refs.phone);
    this.$validate(this.$refs.form, {
      phone: {
        required: true,
        number: true,
        minlength: 10,
      },
      comment: {
        required: true,
      },
    });
  },
};
</script>
