<div class="mx-auto flex flex-col items-center justify-center h-screen bg-gradient-to-tl from-blue-500 to-white">
    <div class="w-full max-w-md border border-blue-400 rounded-md p-4 bg-white">
        <div class="text-2xl font-bold">
            <i class="fa fa-user me-2"></i>
            Manage finance
        </div>
        <form class="mt-5" wire:submit="signin">
        
            <div>Username</div>
            <input type="text" wire:model="username" class="form-control" />
            @if (isset($errorUsername))
                <div class="text-red-500 mt-2">
                    <i class="fa fa-exclamation-triangle me-2"></i>
                    {{ $errorUsername }}
                </div>
            @endif

            <div class="mt-2">Password</div>
            <input type="password" wire:model="password" class="form-control" />
            @if (isset($errorPassword))
                <div class="text-red-500 mt-2">
                    <i class="fa fa-exclamation-triangle me-2"></i>
                    {{ $errorPassword }}
                </div>
            @endif

            <button type="submit" class="btn btn-primary mt-5">Sign In</button>
        </form>

        @if (isset($error))
            <div class="text-red-500 mt-2">
                <i class="fa fa-exclamation-triangle me-2"></i>
                {{ $error }}
            </div>
        @endif

        <button type="submit" class="btn btn-danger mt-2" wire:click="goToSignup">Sign Up</button>
    </div>
</div>
