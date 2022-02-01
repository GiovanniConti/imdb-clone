<template>
  <div>
    <ul class="list-group">
      <li
        class="list-group-item d-flex align-items-center"
        aria-disabled="true"
        v-for="movie in movieList"
        :key="movie.id"
      >
        <img :src="movie.coverImg" alt="..." />
        <h3>{{ movie.title }}</h3>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: "moviesList",
  props: {
    movieList: Array,
  },
};
</script>

<style lang='scss'>
.list-group-item {
  img {
    width: 50px;
    margin-right: 5px;
  }
  h3 {
    font-size: 15px;
  }
}
</style>