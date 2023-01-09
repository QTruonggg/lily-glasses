<div class="input-group mb-1">
   <div class="wrap">
     <input type="color" name="color[]" class="input me-1 ">
     <input type="imageColor" name="imageColor[]" class="input me-1 ">
   </div>
</div>

<style>
    .input-group > .wrap > img {
        display: none;
    }
</style>

<script>
    $('.add-button').click(function() {
        $('.input-group').append('<div class="wrap"><input type="color" name="color[]" class="input me-1 "><input type="text" name="imageColor[]" class="input me-1 "></div>')
    })
    $('.reset').click(function() {
        $('.input:last-child').remove()
    })
</script>