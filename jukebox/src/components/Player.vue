<template>
  <!-- Cette partie va contenir notre HTML -->
  <div>
    <h1>{{ title }}</h1>
    <p>{{ tagline }}</p>
    <!-- on va créer la structure de notre application -->
    <section>
      <!-- zone où on va afficher le titre en cours de lecture -->
      <h2>Now Playing : {{ current.title }}</h2>
      <p>By : {{ current.artist }}</p>
      <!-- zone où on va afficher les contrôles du player -->
      <button @click="prev" :disabled="index <= 0">Prev</button>
      <button v-if="!isPlaying" @click="play">Play</button>
      <button v-else @click="pause">Pause</button>
      <button @click="next" :disabled="index >= songs.length -1">Next</button>
    </section>
    <section>
      <!-- zone où on va afficher notre playlist -->
      <h2>Ma Playlist</h2>
      <div v-for="song in songs" :key="song.src">
          <h3>Track : {{ song.title }}</h3>
          <p>Artist : {{ song.artist }}</p>
          <button @click="play(song)">Play</button>
      </div>
    </section>
  </div>
</template>

<script>
// Cette partie va contenir notre code JS
// on va devoir exporter le component pour qu'il puisse être accessible et utilisable par notre application
export default {
  name: "Player",
  props: {
    title: String,
    tagline: String,
  },
  data() {
    return {
        current: {},
        index: 0,
        isPlaying: false,
        songs: [
            {
                title: "Dragon Fly",
                artist: "Lobo Loco",
                src: require("../assets/music/Lobo_Loco_-_12_-_Dragon_Fly_ID_894.mp3"),
            },
            {
                title: "Private Ark",
                artist: "Six Umbrellas",
                src: require("../assets/music/Six_Umbrellas_-_03_-_Private_Ark.mp3"),
            },
            {
                title: "Asset House.mp3",
                artist: "Six Umbrellas",
                src: require("../assets/music/Six_Umbrellas_-_07_-_Asset_House.mp3"),
            },
            {
                title: "Stranger",
                artist: "Yung_Kartz",
                src: require("../assets/music/Yung_Kartz_-_02_-_Stranger.mp3"),
            },
        ],
        // next on va initialiser notre player
        player: new Audio(),
    };
  },
  mounted() {
      //cette méthode fait partie du cycle de vie d'un composant vuejs
      // les instructions qui se trouvent à l'intérieur ne seront exécutées qu'une fois lorsque le composant est affiché
      this.current = this.songs[this.index];
      this.player.src = this.current.src;
  },
  methods : {
      play(song) {
          // on va déclencher le player lorsqu'on appuie sur le bouton Play
        if (typeof song.src !== "undefined") {
            this.current = song
            this.player.src = this.current.src
        }
        this.isPlaying = true;
        this.player.play();
      },
      pause() {
          this.isPlaying = false;
          this.player.pause();          
      },
      prev() {
           if (this.index <= 0) {
               this.index = 0;
           } else {
              this.index--;
           }
                // on remplace la valeur de this.current par la chanson sélectionnée
      this.current = this.songs[this.index];

      // on passe la nouvelle source au player
      this.player.src = this.current.src;
      this.isPlaying = true;
      this.player.play();
      },
      next() {
          if (this.index >= this.songs.length) {
              this.index = this.songs.lenght -1;
            // this.index = 0;
          } else {
              this.index++;
          }

          // on remplace la valeur de this.current par la chanson sélectionnée
      this.current = this.songs[this.index];

      // on passe la nouvelle source au player
      this.player.src = this.current.src;
      this.isPlaying = true;
      this.player.play();
      },
  },
};
</script>

<style>
/* Ici on va écrire note code CSS */
</style>
