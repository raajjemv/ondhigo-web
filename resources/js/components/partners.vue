<template>
  <vueper-slides
    class="no-shadow"
    :visible-slides="6"
    :arrows="false"
    :gap="3"
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
@media only screen and (max-width: 600px) {
  .vueperslide {
    background-size: 80px;
  }
}
</style>