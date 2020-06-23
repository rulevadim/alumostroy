<template>
  <div>
    <Header />
    <div class="container">
      <div class="d-lg-flex my-5">
        <div class="col pl-lg-5">
          <nuxt />
        </div>
      </div>
    </div>
    <PopUp />
  </div>
</template>

<script>
import Header from '~/components/Header.vue';
import PopUp from '~/components/PopUp.vue';

export default {
  name: 'App',
  components: {
    Header,
    PopUp,
  },
};
</script>
