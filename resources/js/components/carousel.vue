<template>
  <div class="main-cover">
    <vueper-slides
      class="no-shadow"
      autoplay
      transition-speed="1000"
      duration="5000"
    >
      <vueper-slide
        v-for="(slide, i) in landing_page_covers"
        :key="i"
        :image="slide.image"
        :link="slide.link"
      />
    </vueper-slides>
  </div>
</template>
<script>
import { VueperSlides, VueperSlide } from "vueperslides";
import "vueperslides/dist/vueperslides.css";

export default {
  props: ["landing_page_covers"],
  data() {
    return {
      hello: "ok",
    };
  },
  components: { VueperSlides, VueperSlide },
};
</script>
<style lang="css" scoped>
</style>