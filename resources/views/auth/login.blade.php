@extends('layouts.app')

@section('content')

<!-- Advanced login -->
                    <form role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="login-form">
                            <div class="text-center">
                                <div class=""><img src="{{ url('layout/img/logo_natalpraias.png')}}" alt="natal praias"></div>
                                <h5 class="content-group-lg">Acesso ao Dashboard<small class="display-block">Entre com seus dados</small></h5>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                
                                <input id="email" type="email" class="form-control input-lg" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input id="password" type="password" class="form-control input-lg" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group login-options">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="checkbox-inline">
                                            
                                            <input type="checkbox" name="remember" class="styled" {{ old('remember') ? 'checked' : '' }}>
                                            Lembra-me
                                        </label>
                                    </div>

                                    <div class="col-sm-6 text-right">
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Esqueceu sua sehna?
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn bg-blue btn-block btn-lg">Login <i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                            <a href="{{ url('web/social/google') }}">Acessar com google</a>
                            <a href="{{ url('web/social/facebook') }}">Acessar com facebook</a>
                            
                        </div>
                    </form>
                    <!-- /advanced login -->

@endsection
