<template>
  <div class="row justify-content-center justify-content-lg-start mt-5">
    <div class="col-12 col-sm-9 col-md-8">
      <h2 class="title title_pt-0 title_left">
        Остались вопросы?
      </h2>
      <div class="description description_left">
        Напишите, что вас интересует, наши специалисты свяжутся с&nbsp;вами и&nbsp;ответят на&nbsp;все вопросы!
      </div>
      <form ref="form" action="./contact.php" method="post">
        <div class="row">
          <div class="col-12 mb-4">
            <textarea name="comment" class="form-element" placeholder="Ваши комментарии" rows="4"></textarea>
          </div>
          <div class="col-12 col-sm mb-4 mb-sm-0">
            <input type="text" name="email" class="form-element" placeholder="Введите Ваш e-mail" />
          </div>
          <div class="col-12 col-sm">
            <input type="submit" value="Получить ответ" class="form-element form-submit" />
          </div>
        </div>
        <input type="hidden" name="location" value="[alumostroy.ru] Форма обратной связи" />
      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: 'SectionFeedback',
  mounted() {
    this.$validate(this.$refs.form, {
      comment: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
    });
  },
};
</script>
