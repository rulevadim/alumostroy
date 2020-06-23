<template>
  <div class="row justify-content-center justify-content-lg-start mt-5">
    <div class="col-12 col-xl-10 mt-4">
      <div class="form-measurer">
        <h2 class="subtitle subtitle_mt-0 subtitle_center">
          Закажите бесплатный выезд замерщика!
        </h2>
        <div class="description">
          Напишите ваш телефон и&nbsp;мы&nbsp;перезвоним, чтобы договориться о&nbsp;времени приезда замерщика
        </div>
        <form ref="form" action="./contact.php" method="post">
          <div class="row">
            <div class="col-12 col-sm">
              <input ref="phone" type="text" name="phone" class="form-element" placeholder="Ваш телефон" />
            </div>

            <div class="col-12 mt-4 mt-sm-0 col-sm">
              <input type="submit" value="Вызвать замерщика" class="form-element form-submit" />
            </div>
          </div>

          <input type="hidden" name="object" :value="object" />
          <input type="hidden" name="location" value="[alumostroy.ru] Форма вызова замерщика" />
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'SectionFormMeasurer',
  props: { object: { type: String, required: true } },
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

<style lang="scss">
.form-measurer {
  padding: 50px 60px 60px;
  background: $bg-light;
  border-radius: $brs;

  @include media-breakpoint-down(md) {
    padding: 30px 30px 40px;
  }

  @include media-breakpoint-down(sm) {
    padding: 20px 15px 30px;
  }
}
</style>
