@extends('master')
@section("content")

<div class="container custom-login" style="padding: 18px 0px 39px 500px;">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h3>Register </h3>
            <form style="width: 22rem;" action="register" method="POST">
                @csrf
                <!-- Name input -->
                <label class="form-label" for="form5Example0">Name</label>
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="form5Example0" name="name" class="form-control" />
                </div>

                <!-- Email input -->
                <label class="form-label" for="form5Example2">Email address</label>
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form5Example2" name="email" class="form-control" />
                </div>

                <!-- Password input -->
                <label class="form-label" for="form5Example1">Password</label>
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form5Example1" name="password" class="form-control" />
                </div>

                <!-- Password confirmation input -->
                <label class="form-label" for="form5Example3">Confirm Password</label>
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form5Example3" name="password_confirmation" class="form-control" />
                </div>

                <!-- Submit button -->
                <input type="submit" class="btn btn-primary " value="LOGIN" name="submit"style="width: 350px;">
            </form>

        </div>
    </div>
</div>
@endsection
