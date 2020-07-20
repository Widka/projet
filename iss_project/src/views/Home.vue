<template>
  <div class="home">
    <Map title = "Emplacement de l'ISS" />
  </div>
    
   

</template>

<script>
// @ is an alias to /src
import Map from "@/components/Map.vue";

export default {
  name: "Home",
  components: {
    Map
  },
};
</script>
