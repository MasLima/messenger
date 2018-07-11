@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">

            <b-car title="Inicio de Sesion">
                <b-alert show>
                    Ingresa tus Datos : 
                </b-alert>

    
                    <b-form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <b-form-group label="Correo electronico" label-for="email"
                            description="Nunca compartiremos tu correo">
                            <b-form-input type="email"
                                id="email" 
                                name="email"
                                value="{{ old('email') }}" required autofocus
                                placeholder="dguevara@gmail.com">
                            </b-form-input>
                        </b-form-group>

                        <b-form-group label="Contraseña" label-for="password">
                            <b-form-input type="password"
                                id="password" 
                                name="password"
                                value="{{ old('password') }}" required>
                            </b-form-input>
                        </b-form-group>
                        
                        <b-form-group>
                            <b-form-checkbox 
                                name="remember"
                                {{ old('remember') ? 'checked="true"' : '' }}>
                                Recordar sesion
                            </b-form-checkbox>
                        </b-form-group>
                        
                        <b-button type="submit" variant="primary">
                            Ingresar
                        </b-button>

                        <b-button href="{{ route('password.request') }}" variant="link">
                            Olvidaste tu contraseña?
                        </b-button>
                        
                    </b-form>
            </b-car>
        </b-col>
    </b-row>
</b-container>
@endsection
