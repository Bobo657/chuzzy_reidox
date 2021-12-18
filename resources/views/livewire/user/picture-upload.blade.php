<div class="form-group mt-2">
    @if($col != 'photo' && auth()->user()->$col != null)
        <div class="alert alert-light border-0" role="alert">
            <strong>Notice!</strong> {{ $label }} already uploaded.
        </div>
    @else
        @if ($photo)
            Photo Preview:
            <img class="col-md-12" src="{{ $photo->temporaryUrl() }}">
        @endif
        <div class="input-group">
            <input type="file" class="form-control" wire:model="photo" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            <button class="btn btn-outline-secondary" wire:click="upload()" type="button" id="inputGroupFileAddon04">upload {{ $label }}</button>
             @error('photo') 
                <small  class=" col-md-12 text-danger"><i>{{ $message }}</i></small> 
            @enderror
        </div>
    @endif
</div><!--end form-group-->
