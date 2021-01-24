<template>
  <div class="partner-slider">
    <vueper-slides
      class="no-shadow"
      :visible-slides="6"
      :arrows="true"
      :gap="3"
      autoplay
      loop
      :touchable="false"
      :bullets="false"
    >
      <vueper-slide
        v-for="(slide, i) in partners"
        :key="i"
        :image="slide.logo"
        :link="slide.link"
        class="transform hover:scale-110 motion-reduce:transform-none"
      />
    </vueper-slides>
  </div>
</template>
<script>
import { VueperSlides, VueperSlide } from "vueperslides";
import "vueperslides/dist/vueperslides.css";

export default {
  props: ["partners"],
  data() {
    return {
      newsClass: "class-v",
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