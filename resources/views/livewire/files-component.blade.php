<form class="w-50 m-auto mt-5" wire:submit.prevent="submit">
    @error('custom_error')
        <span class="text-primary">{{$message}}</span>
    @enderror
    <!-- Photo -->
    <div class="mb-3">
        <label  class="form-label">Upload File</label>
        <input type="file" class="form-control" wire:model.lazy="photo">
        @error('photo')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <div class="spinner-border text-primary" role="status" wire:loading wire:target='photo'>
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <!-- Pereview -->
    <div class="mb-3">
       @if($photo)
        Image Pereview:
        <img src="{{$photo->temporaryUrl()}}" width="200">
       @endif
    </div>
    
    <button type="submit" class="btn btn-primary">Upload</button>
</form>