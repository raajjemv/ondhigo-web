<template>
  <div class="partner-slider">
    <vueper-slides
      class="no-shadow"
      :visible-slides="2"
      :arrows="false"
      :gap="3"
      autoplay
      loop
      :touchable="false"
      :bullets="false"
      duration="1000"
    >
      <vueper-slide
        v-for="(slide, i) in partners"
        :key="i"
        :image="slide.logo"
        :link="slide.link"
      />
    </vueper-slides>
  </div>
</template>
<script>
import { VueperSlides, VueperSlide } from "vueperslides";
import "vueperslides/dist/vueperslides.css";

export default {
  props: ["partners"],
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
    background-size: 150px;
  }
}
</style>