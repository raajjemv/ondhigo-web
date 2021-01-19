<template>
  <vueper-slides
    class="no-shadow"
    :visible-slides="6"
    :arrows="false"
    :slide-ratio="1 / 4"
    :gap="3"
    :dragging-distance="70"
    autoplay
  >
    <vueper-slide
      v-for="(slide, i) in partners"
      :key="i"
      :image="slide.logo"
      :link="slide.link"
    />
  </vueper-slides>
</template>
<script>
import { VueperSlides, VueperSlide } from "vueperslides";
import "vueperslides/dist/vueperslides.css";

export default {
  props: ["partners"],
  data() {
    return {
      hello: "ok",
    };
  },
  components: { VueperSlides, VueperSlide },
};
</script>
<style lang="css" scoped>
.vueperslide {
  background-repeat: no-repeat;
  background-size: 200px;
}
</style>