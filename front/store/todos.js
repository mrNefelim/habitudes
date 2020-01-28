export const state = () => ({
  list: []
});

export const mutations = {
  add (state, title) {
    state.list.push({
      title,
      done: false
    })
  }
};
