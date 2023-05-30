@props(["name"=>"", "label"=>""])

@if($name != "" || $label !="")
    <div class="form-group">
    <label for="featured_image">{{ $label }}</label> <span class="text-danger">*</span>
    <div class="input-group mb-3">
        <input class="form-control featured_image" type="text" name="{{ $name }}" placeholder="{{ $label }}" required="" aria-label="Image" aria-describedby="button-image">
        <div class="input-group-append">
            <button class="btn btn-info button-image" type="button" ><i class="fas fa-folder-open"></i> Browse</button>
        </div>
    </div>
</div>
@else
<p>Name and Label Required</p>
@endif
