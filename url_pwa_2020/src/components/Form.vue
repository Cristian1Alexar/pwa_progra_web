<template>
    <div class="container">
        <div class="row">
            <div class="col">
                <label for="image">Image</label>
                <input type="text" placeholder="Image URL" name="image" id="image">
            </div>
            <div class="col">
                <label for="title">Titulo</label>
                <input type="text" placeholder="Titulo" name="title" id="title">
            </div>
            <div class="col">
                <label for="title">Descripción</label>
                <input type="text" placeholder="Descripción" name="description" id="description">
            </div>
            <div class="col">
                 <button class="btn btn-primary" type="button" data-toggle="collapse" >
                        Agregar Stock
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'placeForm',
}
</script>

<style>

</style>