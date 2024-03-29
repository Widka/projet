import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import 'leaflet/dist/leaflet.css';

Vue.config.productionTip = false;

// fix display marker icons
import { Icon } from 'leaflet';

delete Icon.Default.prototype._getIconUrl;
Icon.Default.mergeOptions({
  // iconRetinaUrl: require('leaflet/dist/images/marker-icon-2x.png'),
  iconUrl: require('@/assets/iss.png'),
  // shadowUrl: require('leaflet/dist/images/marker-shadow.png'),
});

new Vue({
  router,
  render: h => h(App)
}).$mount("#app");
