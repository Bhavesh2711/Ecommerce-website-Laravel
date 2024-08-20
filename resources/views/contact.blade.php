@extends('master')
@section("content")
<style>
    /* Styles for the container */
    .container {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        margin-top: 50px;
        /*  */
    }

    /* Styles for the form */
    .form-contact {
        border: 1px solid gray;
        background-size: cover;
        background-position: center;
        padding: 22px 218px 15px 43px;
        width: 64%;
        border-radius: 10px;
        line-height: 37px;
        background-image: url('https://img.freepik.com/free-photo/vintage-pink-telephone-composition_23-2148913955.jpg?w=1380&t=st=1709181642~exp=1709182242~hmac=92545d78c831fc6907c543f323be34139d69fa03ecfc3af9d488ce112ed399c8');
    }

    .form-control:focus {
        border-color: #000;
        box-shadow: none;
    }

    label {
        font-weight: 600;
    }

    .error {
        color: red;
        font-weight: 400;
        display: block;
        padding: 6px 0;
        font-size: 14px;
    }

    .form-control.error {
        border-color: red;
        padding: .375rem .75rem;
    }

    /* Additional CSS Rules */
    .btn-dark {
        background-color: #333;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
        margin-top: 20px;
    }

    .btn-dark:hover {
        background-color: #555;
    }

    /* Styles for the image */
    /* .image-container {
    width: 45%;
    margin: 0px;
    margin-left: 20px;
} */
    /* .image-container img {
    max-width: 100%;
        height: 604px;

} */
    /* img {
    border-radius: 25px;
} */
</style>

<div class="container">

    <form action="" method="post" action="{{ route('contact.store') }}" class="form-contact">
        @csrf
        <h3>Conatct Us</h3>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">
            <!-- Error -->
            @if ($errors->has('name'))
            <div class="error">
                {{ $errors->first('name') }}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
            @if ($errors->has('email'))
            <div class="error">
                {{ $errors->first('email') }}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">
            @if($errors->has('phone'))
            <div class="error">
                {{ $errors->first('phone') }}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label>Subject</label>
            <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject" id="subject">
            @if ($errors->has('subject'))
            <div class="error">
                {{ $errors->first('subject') }}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label>Message</label>
            <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message" rows="4"></textarea>
            @if ($errors->has('name'))
            <div class="error">
                {{ $errors->first('name') }}
            </div>
            @endif
        </div>
        <!-- Add other form fields similarly -->
        <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
    </form>

    <!-- Image displayed using flexbox -->

</div>

@endsection