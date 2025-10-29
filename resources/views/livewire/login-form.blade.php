<div>
    <form class="bg-light p-5 border border-1 mb-3" wire:submit="login" novalidate>
        <div class="form-group mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" wire:model="email">
            @error('email')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" wire:model="password">
            @error('password')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <button class="btn btn-primary">Login</button>

        @if (isset($loginMessage))
        <div class="alert alert-danger mt-3">{{ $loginMessage }}</div>
        @endif
    </form>
</div>
