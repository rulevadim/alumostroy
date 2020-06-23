export default {
  mode: 'universal',

  router: {
    extendRoutes(routes, resolve) {
      routes.push({
        path: '*',
        redirect: '/',
      });
    },
  },

  head: {
    htmlAttrs: {
      lang: 'ru',
    },
    //   title: process.env.npm_package_name || '',
    //   meta: [
    //     { charset: 'utf-8' },
    //     { name: 'viewport', content: 'width=device-width, initial-scale=1' },
    //     {
    //       hid: 'description',
    //       name: 'description',
    //       content: process.env.npm_package_description || '',
    //     },
    //   ],
    //   link: [{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }],
  },
  /*
   ** Customize the progress-bar color
   */
  loading: { color: '#fff' },
  /*
   ** Global CSS
   */
  css: ['./assets/scss/main.scss'],
  /*
   ** Plugins to load before mounting the App
   */
  plugins: ['~plugins/global', '~plugins/global.client', '~/plugins/lazysizes.client.js'],
  /*
   ** Nuxt.js dev-modules
   */
  buildModules: [
    // Doc: https://github.com/nuxt-community/eslint-module
    '@nuxtjs/eslint-module',
    // Doc: https://github.com/nuxt-community/stylelint-module
    '@nuxtjs/stylelint-module',

    '@aceforth/nuxt-optimized-images',

    // 'nuxt-purgecss',
  ],
  /*
   ** Nuxt.js modules
   */
  modules: [
    // Doc: https://axios.nuxtjs.org/usage
    '@nuxtjs/axios',
    '@nuxtjs/style-resources',
  ],
  /*
   ** Axios module configuration
   ** See https://axios.nuxtjs.org/options
   */
  axios: {},

  styleResources: {
    scss: [
      './assets/scss/vars.scss',
      './assets/scss/mixins.scss',
      'bootstrap/scss/_functions.scss',
      'bootstrap/scss/_variables.scss',
      'bootstrap/scss/mixins/_breakpoints.scss',
      'bootstrap/scss/mixins/_grid-framework.scss',
      'bootstrap/scss/mixins/_grid.scss',
    ],
  },

  optimizedImages: {
    // inlineImageLimit: 1000,
    // handleImages: ['jpeg', 'png', 'svg', 'webp', 'gif'],
    optimizeImagesInDev: true,
    // optipng: {
    //   optimizationLevel: 10,
    // },
    pngquant: {
      posterize: 1,
    },
  },

  build: {
    analize: {
      analyzerMode: 'static',
    },
    extractCSS: true,
    extend(config, { isDev, isClient, loaders: { vue } }) {
      if (isClient) {
        vue.transformAssetUrls.img = ['data-src', 'src'];
        vue.transformAssetUrls.source = ['data-srcset', 'srcset'];
      }
    },
  },

  generate: {
    subFolders: false,
  },
};
