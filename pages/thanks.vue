<template>
  <div>
    <h1 class="title title_pages title_center">
      Спасибо за&nbsp;заявку!
    </h1>
    <div class="description font_black">Наши менеджеры свяжутся с&nbsp;Вами в&nbsp;ближайшее время.</div>
  </div>
</template>

<script>
export default {
  name: 'AluminievieVitrazhi',

  head() {
    return {
      title: 'Спасибо, форма успешно отправлена!',
    };
  },

  layout: 'thanks',
};
</script>
