// export const strict = false;

export const state = () => ({ allSlides: undefined, buttons: undefined, googleMapsLoader: undefined });

export const mutations = {
  setAllSlides(state, slides) {
    state.allSlides = slides;
  },

  setButtons(state, buttons) {
    state.buttons = buttons;
  },

  setGoogleMapsLoader(state, loader) {
    state.googleMapsLoader = loader;
  },
};
