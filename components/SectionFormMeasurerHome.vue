<template>
  <section class="measurer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="title font_white measurer__title">
            Закажите бесплатный выезд&nbsp;замерщика!
          </div>
          <div class="description font_white desct measurer__description">
            Выберите вид конструкций, который вас интересует, напишите ваш телефон и&nbsp;мы&nbsp;перезвоним чтобы
            договориться о&nbsp;времени приезда замерщика.
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <form ref="form" action="./contact.php" method="post">
            <div class="measurer__form-visible row">
              <div class="col-12 col-md-auto">
                <select name="object" size="1" class="form-element measurer__select">
                  <option value="окна" selected>Окна</option>
                  <option value="двери">Двери</option>
                  <option value="фасады">Фасады</option>
                  <option value="перегородки">Перегородки</option>
                  <option value="витражи">Витражи</option>
                  <option value="зимние сады">Зимние сады</option>
                  <option value="входные группы">Входные группы</option>
                  <option value="зенитные фонари">Зенитные фонари</option>
                  <option value="маятниковые двери">Маятниковые двери</option>
                </select>
              </div>
              <div class="col-12 col-md-auto">
                <input
                  ref="phone"
                  type="text"
                  name="phone"
                  class="form-element form-phone measurer__phone"
                  placeholder="Ваш телефон"
                />
              </div>
              <div class="col-12 col-md-auto">
                <input type="submit" value="Вызвать замерщика" class="form-element form-submit" />
              </div>
            </div>
            <input type="hidden" name="location" value="[alumostroy.ru] Форма вызова замерщика" />
          </form>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'SectionFormMeasurerHome',
  mounted() {
    this.$Inputmask(this.$refs.phone);
    this.$validate(this.$refs.form, {
      phone: {
        required: true,
        number: true,
        minlength: 10,
      },
    });
  },
};
</script>
