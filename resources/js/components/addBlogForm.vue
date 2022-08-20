<template>
    <div>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="title">Category</label>
            <input type="text" class="form-control" id="category" name="category">
        </div>

        <div class="form-group">
            <label for="title">Details</label><br>
            <textarea class="form-group" name="details" id="details" cols="41" rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </div>
</template>

<script>
export default {
    
}
</script>