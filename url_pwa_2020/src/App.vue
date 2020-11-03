<template>
  <div id="app">
    <navbar></navbar>
    <main>
      <div class="container">
        <card v-for="place in places" :place="place" :key="place.id"></card>
      </div>
      
      <footerapp>
      </footerapp>
    </main>
  </div>
</template>

<script>
import Hello from './components/Hello'
import Copyright from './components/Copyright'
import footerapp from './components/Footer'
import Navbar from './components/Navbar'
import Card from './components/Cards'
import placeForm from './components/Form'

export default {
  name: 'app',
  components: {
    Hello, 
    Copyright, 
    footerapp,
    Navbar,
    Card,
    placeForm
  },
  data(){
    return {
      places: []
    }
  },
  methods: {
    loadPlaces(){
      fetch('http://127.0.0.1:8000/api/places')
      .then(res => res.json())
      .then(jsonResponse => this.places = jsonResponse.data);
    }
  },
  mounted(){
    this.loadPlaces();
  }
}
</script>

<style>
body {
  margin: 0;
  padding: 0;
}

#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}

main {
  text-align: center;
  margin-top: 40px;
}

header {
  margin: 0;
  height: 56px;
  padding: 0 16px 0 24px;
  background-color: #35495E;
  color: #ffffff;
}

header span {
  display: block;
  position: relative;
  font-size: 20px;
  line-height: 1;
  letter-spacing: .02em;
  font-weight: 400;
  box-sizing: border-box;
  padding-top: 16px;
}
</style>
