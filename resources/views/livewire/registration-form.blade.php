<div class="modal">
    <div class="modal-content">
        <!-- Image Section -->
        <div>
            <img src="{{ asset('uploads/Artboard_1.png') }}" alt="Logo">
        </div>

        <!-- Form Section -->
        <div>
            <span class="close" wire:click="closeForm">&times;</span>
            @if ($successMessage)
                <div class="alert alert-success">
                    {{ $successMessage }}
                </div>
            @endif

            <form wire:submit.prevent="save">
                <input type="text" wire:model="name" placeholder="First Name">
                @error('name') <span class="error">{{ $message }}</span> @enderror

                <input type="text" wire:model="lastName" placeholder="Last Name">
                @error('lastName') <span class="error">{{ $message }}</span> @enderror

                <input type="text" wire:model="address" placeholder="Address">
                @error('address') <span class="error">{{ $message }}</span> @enderror

                <select wire:model="gender">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                @error('gender') <span class="error">{{ $message }}</span> @enderror

                <input type="date" wire:model="dob">
                @error('dob') <span class="error">{{ $message }}</span> @enderror

                <input type="email" wire:model="email" placeholder="Email">
                @error('email') <span class="error">{{ $message }}</span> @enderror

                <input type="password" wire:model="password" placeholder="Password">
                @error('password') <span class="error">{{ $message }}</span> @enderror

                <input type="password" wire:model="password_confirmation" placeholder="Confirm Password">
                
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</div>
