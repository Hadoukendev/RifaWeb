
@extends('templates.default')

@section('pagecontent')


<section class="entrar">
    <div class="container">
        <div class="row">
        <div class="col-md-6 mb-4 offset-md-3">

            <div>
                <div class="card-body">
                    
                    <div class="row omb_row-sm-offset-3 social-login">
                        <div class="col-md-4 offset-md-4">
                            <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
                                <i class="fa fa-facebook visible-xs"></i>
                                <span class="hidden-xs">Facebook</span>
                            </a>
                        </div>
                    </div>
                    <h6 class="section-title-center py-3"> <span class="secition-title-main"><i class="fa fa-lock"></i> Iniciar sesión</span></h6>
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissable">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          {{ session('status') }}
                        </div>
                      @endif
                    @if (count($errors)>0)
                      <div class="alert alert-danger alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif
                    <!--Body-->
                    <form id="loginform" class="form-horizontal" role="form" action="{{ url('/entrar') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="md-form input-field">
                            
                            <input type="text" id="defaultForm-email" name="email" class="form-control" required>
                            <label for="defaultForm-email"><i class="fa fa-envelope grey-text fa-lg"></i> Email</label>
                        </div>
                        <div class="md-form input-field">
                            
                            <input type="password" id="defaultForm-pass" name="password" class="form-control" required>
                            <label for="defaultForm-pass"><i class="fa fa-lock grey-text fa-lg"></i> Contraseña</label>
                        </div>
                        <div>
                            <button class="btn btn-default waves-effect waves-light">Entrar</button>
                            &nbsp; &nbsp; &nbsp; &nbsp; 
                         
                              <input type="checkbox" id="test5" />
                              <label for="test5">Recordarme</label>
                            
                        </div>
                        <p>
                            <a href="{{ url('/password/email') }}">¿Olvidaste tu contraseña?</a>
                        </p>
                        <p>
                            ¿No tienes una cuenta? <a href="{{ url('/registro') }}">Regístrate ahora</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>

        
    </div>
    </div>
</section>

@endsection