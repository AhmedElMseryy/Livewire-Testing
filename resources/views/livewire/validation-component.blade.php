<form class="w-50 m-auto mt-5" wire:submit.prevent="submit">
    @error('custom_error')
        <span class="text-primary">{{$message}}</span>
    @enderror
    <!-- EMAIL -->
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" wire:model.lazy="email">
        <div class="text-danger">
            @error('email') {{ $message }} @enderror
        </div>
    </div>
    <!-- PASSWORD -->
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" wire:model.lazy="password">
        <div class="text-danger">
            @error('password') {{ $message }} @enderror
        </div>
    </div>
    <!-- REMEMBER -->
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" wire:model="remember">
        <label class="form-check-label" for="exampleCheck1">Remember</label>
        <div>@error('remember') {{ $message }} @enderror</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>