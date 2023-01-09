<div class="input-group mb-1">
    <input type="color" name="{{$name}}" class="input me-1 ">
</div>

<style>
    .input-group >img {
        display: none;
    }
</style>

<script>
    $('.add-button').click(function() {
        $('.input-group').append('<input type="color" name="{{$name}}" class="input me-1 ">')
    })
    $('.reset').click(function() {
        $('.input:last-child').remove()
    })
</script>