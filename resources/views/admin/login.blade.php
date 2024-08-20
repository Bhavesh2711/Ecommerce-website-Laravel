<!-- resources/views/auth.blade.php -->

@if (Auth::check())
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
@else

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="container">
            <div class="login-box">
            <center><img src="{{ asset('uploads/logo.png') }}" alt="Logo" style="width: 150px; height: auto;"></center> 
                <h2>Login</h2>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="form-control">
                    @error('email')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password" class="form-control">
                    @error('password')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </div>
        </div>
    </form>
@endif

<style>
    button.btn.btn-primary.btn-block {
    background-color: #ce8d25;
}
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 220px
    }

    .login-box {
        width: 300px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .btn {
        width: 100%;
        padding: 10px;
    }
</style>
