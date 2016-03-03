
<style type="text/css">
	
</style>

<div class="row">
	<label>Upload image</label>
	<input type="file" class="form-control image btn " id="image">
</div>
<div class="row">
	
		<img src="#" id="imgInp" class="img-responsive">
	
</div>

@section('footer')
<script type="text/javascript">
	function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imgInp').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#image").change(function(){
    readURL(this);
});
</script>
@stop