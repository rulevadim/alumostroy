<template>
  <div id="pop-callback" class="pop-up">
    <div class="title pop-up__title font_black">Оставьте заявку</div>
    <div class="description font_black">
      И мы свяжемся с Вами<br />
      в&nbsp;ближайшее время
    </div>
    <div class="wrapper-form__inner">
      <form ref="form" action="./contact.php" method="post" class="form">
        <input type="text" name="name" class="form-element" placeholder="Ваше имя" />
        <input ref="phone" type="text" name="phone" class="form-element form-phone" placeholder="Ваш телефон" />
        <input type="submit" value="Отправить" class="form-element form-submit" />

        <input type="hidden" name="location" value="[alumostroy.ru] Форма заказа звонка" />
      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: 'PopUp',
  mounted() {
    this.$Inputmask(this.$refs.phone);
    this.$validate(this.$refs.form, {
      phone: {
        required: true,
        number: true,
        minlength: 10,
      },
      name: {
        required: true,
      },
    });
  },
};
</script>
