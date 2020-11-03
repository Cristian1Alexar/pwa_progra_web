<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"> <i class="fas fa-map-marker-alt"></i> Turismo Guate</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Recomendaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reservaciones</a>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
export default {
    name: 'navbar'
}
</script>

<style  scoped>
    nav{
        background-color: #33495d;
        width: 100%;

    }
    ul {
        list-style-type: none;
        margin: 0;
        margin-left: 20px;
        text-align: left;
        padding: 0;
        
    }
    li{
        display: inline;
        padding: 5px;
        
        }
    a{
        text-decoration: none;
        color: white;
    }
    a:hover{
        text-decoration: none;
        color: gold;
    }
</style>