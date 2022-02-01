<template>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <TrailersCarousel :movieList="movieList"></TrailersCarousel>
      </div>
      <div class="col-6 col-md-4">
        <MoviesList :movieList="movieList"></MoviesList>
      </div>
    </div>
  </div>
</template>

<script>
import MoviesList from "./partials/MoviesList.vue";
import TrailersCarousel from "./partials/TrailersCarousel.vue";
export default {
  components: { TrailersCarousel, MoviesList },
  name: "heroSlider",
  props: {
    movieList: Array,
  },
};
</script>

<style>
</style>