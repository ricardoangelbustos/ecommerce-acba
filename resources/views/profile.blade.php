@extends('layouts.template')

@section('title', 'Perfil')

@section('css')
    {{ '/css/profile.css' }}
@endsection

@section('main')

<section class="user row">
  <article class="user-info col-12 row">
    <form class="col-12 col-md-8 row" action="" method="post" enctype="multipart/form-data">
      <fieldset class="row col-12">
        <h2>Datos de mi cuenta</h2>
        @csrf
        <input type="hidden" name="id" value="{{$User->id}}">

        <!-- EMAIL -->
        <div class="form-group">
          <label for="email">E-Mail</label>
          <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email', $User->email)}}">
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

        <!-- CONTRASEÑA -->
        <div class="form-group">
          <label for="password">Cambiar contraseña</label>
          <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="**********">
            @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>

        <!-- RE CONTRASEÑA -->
        <div class="form-group re-pass">
          <label for="repassword">Reingrese contraseña</label>
          <input type="password" id="repassword" name="password_confirmation" class="form-control" placeholder="**********">
        </div>

        <!-- Foto de perfil -->
        <div class="form-group">
          <label for="img">Foto de perfil</label> <br>
          <input name="image" type="file" id="img">
        </div>

        <h2>Datos personales</h2>

        <!-- NOMBRE -->
        <div class="form-group">
            <label for="first_name">Nombre</label>
            <input type="text" id="first_name" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{old('first_name', $User->first_name)}}">
            @error('first_name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror 
        </div>


        <!-- APELLIDO -->
        <div class="form-group">
          <label for="last_name">Apellido</label>
          <input type="text" id="last_name" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{old('last_name', $User->last_name)}}">
            @error('last_name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror 
        </div>

        <!-- DNI -->
        <div class="form-group">
          <label for="dni">Documento</label>
          <input type="text" id="dni" name="dni" class="form-control @error('dni') is-invalid @enderror" value="{{old('dni', $User->dni)}}">
            @error('dni')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror 
        </div>

        <!-- FECHA DE NACIMIENTO -->
        <div class="form-group">
          <label for="birthdate">Fecha de nacimiento</label>
          <input type="date" id="birthdate" name="birthdate" class="form-control @error('birthdate') is-invalid @enderror" value="{{old('birthdate', $User->birthdate)}}">
            @error('birthdate')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror 
        </div>

        <!-- TELEFONO -->
        <div class="form-group">
          <label for="phone">Telefono</label>
          <input type="text" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone', $User->phone)}}">
            @error('phone')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror 
        </div>

        <!-- DIRECCION -->
        <div class="form-group">
          <label for="address">Direccion</label>
          <input type="text" id="address" name="address" class="form-control @error('address') is-invalid @enderror" value="{{old('address', $User->address)}}">
            @error('address')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror 
        </div>



      </fieldset>

      <!-- BOTONES -->
      <div class="button-container col-12">
        <button type="submit" id="btn-edit" class="btn btn-primary">Guardar Datos</button>
      </div>

    </form>
    <div class="col-12 col-md-4 imgAndHistory-container">
        <img class="img-fluid img-thumbnail" id="profileimg" src="user_img/{{$User->image}}" alt="">
        <br>
        <a href="/history">Ver historial de compras</a><br>

        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Cerrar sesión
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
  </article>
</section>




@endsection