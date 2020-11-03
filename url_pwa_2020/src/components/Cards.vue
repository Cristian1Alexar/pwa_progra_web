<template>
    <div class="card" style="width: 18rem;">
        <img v-bind:src="this.place.img_source" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">{{place.title}}</h5>
            <p class="card-text">{{place.description}}</p>
            <p class="card-text">Puntuación: {{place.score}}</p>
            <a class="btn btn-warning" v-on:click="addScore()"><i class="far fa-thumbs-up"></i></a>
        </div>
    </div>
</template>

<script>
export default {
    name: "card",
    data(){
        return{
            rated: false,
        }
    },
    methods: {
        addScore(){
            if(!this.rated){
                this.place.score++;
                var API_URI = 'http://127.0.0.1:8000/api/places/';
                var id = String(this.place.id);
                fetch(API_URI + id, {
                method: 'PUT',
                body: {
                    img_source: this.place.img_source,
                    title: this.place.title,
                    description: this.place.description,
                    score: this.place.score
                }
                }).then(res => console.log(res), err=> console.log(err));
            }
            this.rated = true;
        }
    },
    props: {
        place:{
            type: [Object],
            required: true, 
            default: {
                score: 0,
                title: "Lorem Ipsum",
                description: "Sed feugiat felis a dui ullamcorper rutum.",
                img_source: 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ8NDQ0NFREWFhURExUYHSggGBolGxMTITEhJTU3Li4uFx8zODMsNygtLjcBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAMIBAwMBIgACEQEDEQH/xAAZAAEBAQEBAQAAAAAAAAAAAAAAAQIDBAf/xAAtEAEBAAADBAkEAwEAAAAAAAAAAQIDERRRkaETITEyQVJhcbEEEoHRIrLhcv/EABQBAQAAAAAAAAAAAAAAAAAAAAD/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwD6dI1CRqARdCNQCRSKBFAAFAAABQQUBBQEFAQAEFARNFAZSxqwBjRGqzYDLNjdQGNEa0AaaSNQDRqJGgFABQABQQUAAAAAAAAAABBUARQESqAyljVSgwzW7EoMKANRqMxoFjUSKAqKACgAAAAAAAAAAAAAAAAgqAIoCIqUGazW2aDOgoCxpI0CwCAoACgAAAAAAAAAAAAAAAAAACAAlFQEZrVSgwoAsaiRYCqigAoAAAAAAAOeLNkunXb46A6Dl003XkdNN15A6jl003XkdNN15A6jn009XQAAAAAABFQBFQCs1pAZRQFjUZagCooCooAAAAAADhlSfdj107cXb/1XdwyevFmT1xfNBOmnkmm/q14aO0wzdOEcOgvppvejDNJJu6gPtm6cIfbN04R587O1/jhvpbPiGTm6dV7PD0B0z5PtvVO2eHrG8vuz2jH1Hcvvh+Y1ld2ewNgAAAAAIqAIqAIqAgACxFgKqKAqKAAAAAAA8/0/ex+9/tXoebKmtzZO3XF80DPztf44b72fEYxZ2KzTjfGw2fHunE2fHunEHMdNnx7pxNnx7pxBrXXKvpZPxrHfJ7uH2ccWC4cvFL5pecdsnu4fYGwAAAAAEVAEqpQKi1KCAARYkWAqooCooAAAAAADhj+n1tsxaa9ddwHn2a+e8/2bNfPef7egB59mvnvP9mzXz3n+3oAefZt+O38f674ZpJJ4KAAAAAAAJVQBKqAVFqAmqCAsaYjQNBAFABQAAAAAAAAAAAAAAAAAAAEAEoUBKlVmgIAEajDUBqKy0AqKAqAKAAAAAAAAAAAAAAAAioACAFEAZq1mggmoBGoxGoDcqxiNQGhIoKIoCoAoAAAAAAAAAAAAgACAAAiVWaBWVrNA1EARqMStQGo1GIsBuKzF1BoSKCiAKAAqAKJqAomoCiAKgACAAACCWgWs0qagVmlS0AZAI1ABVUBWogDRABQAAAUAAAAAAAEAAQAAAREAKzQBGcSAM0AH/9k='
            }
        }
    }
}
</script>

<style scoped>
    .card{
        display: inline-block;
        margin: 15px;
    }
    .btn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    
    }
    img{
        max-width: 100%;
    }
    
</style>