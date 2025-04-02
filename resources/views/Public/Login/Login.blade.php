<!DOCTYPE html>
<html lang="es">

<head>
    @include('Components.Public.Navigations.Head')
    @include('Components.Public.Script.Style')
</head>

<body>
    @include('Components.Public.Navigations.Menu-2')

    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            @include('Components.Admin.Navigations.MessageAlert')
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="{{ url('storage/icon/login.webp') }}" alt="login" />
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Login</h2>
                        </div>

                        <form method="post" action="{{ route('public.login.store') }}">
                            @csrf

                            <div class="input-group custom">
                                <input type="email" name="email" class="form-control form-control-lg"
                                    placeholder="Email" value="{{ old('email') }}"/>
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>
                            @if ($errors->has('email'))
                                <code>
                                    <i class="bi bi-question-circle"></i>
                                    {{ $errors->first('email') }}
                                </code>
                            @endif
                            <p></p>
                            <div class="input-group custom">
                                <input type="password" name="password" class="form-control form-control-lg"
                                    placeholder="**********" value="{{ old('password') }}"/>
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>
                            @if ($errors->has('password'))
                                <code>
                                    <i class="bi bi-question-circle"></i>
                                    {{ $errors->first('password') }}
                                </code>
                            @endif
                            <p></p>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block"
                                            href="index.html">Sed</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
{{--@include('Admin.Components.Scripts.Js')--}}
@include('Components.Public.Script.Js')
