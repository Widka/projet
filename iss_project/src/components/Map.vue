<template>
<div>
<h1>{{title}}</h1>
<!-- le composant l-map a des propriétés zoom et center qu'on va rendre dynamiques
 en les liant aux propriétés correspondantes du state (zoom, lat lng, ...)-->
<div id="map">
<l-map 
:zoom = "zoom"
:center="[lat, lng]"
style="height: 400px; width=100%;"
>
    <l-tile-layer 
    :url="url"
    />
    <l-marker :lat-lng="[lat, lng]" title="test hover">
        <l-popup>
            <div>
                <h3>ISS Coordinates</h3>
                <p>Latitude : {{ lat }}</p>
                <p>Longitude : {{ lng }}</p>
            </div>
        </l-popup>
    </l-marker>
</l-map>
</div>
</div>
</template>

<script>
import { LMap, LTileLayer, LMarker,LPopup } from 'vue2-leaflet';

export default {
    name: "Map",
    props: {
        title: String
    },
    components:  {
        LMap,
        LTileLayer,
        LMarker,
        LPopup,
    },
    data() {
        return {
            // la propriété url va contenir l'url du fond de carte qu'on va utiliser
            url: "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
            // ici on va configurer notre carte
            lat: "",
            lng: "",
            zoom: 4,
            isLocated: false,
            location: {},
        };
    },
    methods: {
        getISSPosition: function() {
            fetch("http://api.open-notify.org/iss-now.json")
            .then(response => response.json()) // équivalent de JSON.parse()
            .then(data => {
            // destructuring
            // const {latitude, longitude} = data.iss_position
            //this.lng = longitude;
            //this.lat = latitude;

            this.lng = data.iss_position.longitude;
            this.lat = data.iss_position.latitude;
            });
        },
        getISSPositionasync: async function() {
            const response = await fetch("http://api.open-notify.org/iss-now.json")
            const json = await response.json();
            console.log(json);
        }
    },
    created() {
        this.getISSPosition();
        setInterval(() => {
            this.getISSPosition()
        }, 4000)
    }
};
</script>

<style scoped> 

</style>