@extends('layout.default')

@section('page-content')
<main class="login-form">
    <div class="container h-100 mt-40 mb-40">
        <div class="row justify-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="text-2xl font-black italic text-center">Login Here</h3>
                    <div class="card-body flex justify-center py-10">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-5">
                                <input type="text" placeholder="Email" id="email" class="form-control w-80" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-5">
                                <input type="password" placeholder="Password" id="password" class="form-control w-80" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto flex justify-center text-white">
                                <button type="submit" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-pink-700 transition font-black">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection