<template>
  <div>
    <Header />
    <nuxt />
    <Footer />
    <PopUp />
  </div>
</template>

<script>
import Header from '~/components/Header.vue';
import Footer from '~/components/Footer.vue';
import PopUp from '~/components/PopUp.vue';

export default {
  name: 'App',
  components: {
    Header,
    Footer,
    PopUp,
  },
};
</script>
