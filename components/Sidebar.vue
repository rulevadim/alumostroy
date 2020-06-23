<template>
  <nav class="sidebar">
    <ul>
      <li v-for="item in menu" :key="item.name" :class="{ active: item.link === $route.path }">
        <nuxt-link :to="item.link">{{ item.name }}</nuxt-link>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  name: 'Sidebar',
  data() {
    return {
      menu: [
        {
          name: 'Алюминиевые окна',
          link: '/aluminievie-okna',
        },
        {
          name: 'Алюминиевые двери',
          link: '/aluminievie-dveri',
        },
        {
          name: 'Алюминиевые фасады',
          link: '/aluminievie-fasadi',
        },
        {
          name: 'Зимние сады',
          link: '/aluminievie-zimnie-sadi',
        },
        {
          name: 'Зенитные фонари',
          link: '/aluminievie-zenitnie-fonari',
        },
        {
          name: 'Офисные перегородки',
          link: '/aluminievie-ofisnie-peregorodki',
        },
        {
          name: 'Маятниковые двери',
          link: '/aluminievie-mayatnikovie-dveri',
        },
        {
          name: 'Входные группы',
          link: '/aluminievie-vhodnie-gruppi',
        },
        {
          name: 'Алюминиевые витражи',
          link: '/aluminievie-vitrazhi',
        },
        {
          name: 'Профиль Алюмарк',
          link: '/profil-alumark',
        },
        {
          name: 'Фурнитура',
          link: '/furnitura',
        },
      ],
    };
  },
};
</script>

<style lang="scss">
.sidebar {
  flex: 0 0 250px;

  ul {
    padding: 0;
    margin: 0;
    overflow: hidden;
    list-style: none;
    border: solid 1px #cacaca;
    border-radius: $brs;
  }

  li {
    transition: background-color 0.3s, border-color 0.3s;

    &:not(:first-child) {
      border-top: solid 1px #cacaca;
    }

    &:hover {
      background: #f9f9f9;
    }

    &.active {
      background: #f9f9f9;
      border-color: transparent;
    }

    &.active + li {
      border-color: transparent;
    }
  }
  a {
    display: block;
    width: 100%;
    padding: 18px 24px 19px;
    font-family: 'Open Sans Light', sans-serif;
    font-size: 16px;
    color: black;
    text-align: left;
    text-decoration: none;

    @include media-breakpoint-down(md) {
      text-align: center;
    }
  }
  .nuxt-link-exact-active {
    font-family: 'Open Sans Semibold', sans-serif;
    font-size: 16px;
    color: black;
  }
}
</style>
