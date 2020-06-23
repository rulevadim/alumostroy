<template>
  <div class="profile__container">
    <h3 class="profile__title">
      <slot></slot>
    </h3>
    <div class="profile__body">
      <slot name="img"></slot>
      <div class="profile__content">
        <ul class="profile__tabs">
          <li
            v-for="tab in tabs"
            :key="tab.name"
            class="profile__tab"
            :class="{ profile__tab_active: tab.isActive }"
            @click="toggle(tab.name)"
          >
            {{ tab.name }}
          </li>
        </ul>
        <div v-if="tabs[0].isActive" class="profile__tab-content">
          <slot name="props"></slot>
        </div>
        <div v-if="tabs[1].isActive" class="profile__tab-content">
          <slot name="feats"></slot>
        </div>
        <div v-if="tabs[2].isActive" class="profile__tab-content">
          <slot name="advants"></slot>
        </div>
        <div v-if="tabs[3].isActive" class="profile__tab-content">
          <slot name="materials"></slot>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ProfileItem',

  data() {
    return {
      tabs: [
        { name: 'Характеристики', isActive: true },
        { name: 'Особенности', isActive: false },
        { name: 'Преимущества', isActive: false },
        { name: 'Материалы в PDF', isActive: false },
      ],
    };
  },

  methods: {
    toggle(selectedTab) {
      this.tabs.forEach(tab => {
        tab.isActive = tab.name === selectedTab;
      });
    },
  },
};
</script>
