<div class="input-group mb-1 row">
   <div class="wrap d-flex flex-column col-md-2">
     <input type="color" name="color[]" class="input me-1 w-100 mb-1">
    <input type="file" name="imageColor[]" class="form-control btn-sm">
   </div>
</div>

<style>
    .input-group > .wrap > img {
        display: none;
    }
</style>

<script>
    $('.add-button').click(function() {
        $('.input-group').append('<div class="wrap  d-flex flex-column col-md-2"><input type="color" name="color[]" class="input me-1 w-100 mb-1 "><input class="form-control btn-sm" type="file" id="customFile1" name="imageColor[]"></div>')
    })
    $('.reset').click(function() {
        $('.wrap:last-child').remove()
    })
</script>