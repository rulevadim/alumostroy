<template>
  <div>
    <Header />
    <div class="container">
      <div class="d-lg-flex my-5">
        <Sidebar />
        <div class="col pl-lg-5">
          <nuxt />
        </div>
      </div>
    </div>
    <Footer pages />
    <PopUp />
  </div>
</template>

<script>
import Header from '~/components/Header.vue';
import Footer from '~/components/Footer.vue';
import Sidebar from '~/components/Sidebar.vue';
import PopUp from '~/components/PopUp.vue';

export default {
  name: 'App',
  components: {
    Header,
    Footer,
    Sidebar,
    PopUp,
  },
};
</script>
