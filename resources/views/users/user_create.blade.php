@extends('main')

@push('scripts')
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		    $('select').formSelect();
		  });
	</script>
@endpush
@section('extendedSection')
<div class="container" style="padding-top: 50px">
	<div class="row">
		<h4>Registro de usuario</h4>
	</div>
	<div class="row">
	    <form class="col s12" action="/new/user" method="POST" onsubmit="return confirm('Estás seguro de registrar a este usuario?');">
	    	@csrf
	      <div class="row">
	        <div class="input-field col s6">
	          <input id="first_name" type="text" class="validate">
	          <label for="first_name">Nombre</label>
        	</div>
        	<div class="input-field col s6">
	          <input id="last_name" type="text" class="validate">
	          <label for="last_name">Apellido</label>
        	</div>
	      </div>
	      <div class="row">
	      	<div class="input-field col s12">
	         <input id="email" type="email" class="validate">
	         <label for="email">Correo electrónico</label>
	        </div>
	      </div>
	      <div class="row">
	      	<div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Contraseña</label>
        </div>
	      </div>
	     <div class="row">
	     <div class="input-field col s6">
	         <select name="role">
	           <option value="4" selected>Administrador</option>
	           <option value="3">Negocio</option>
	           <option value="2">Repartidor</option>
	           <option value="1">Cliente</option>
	         </select>
	         <label>Rol</label>
	       </div>
	   </div>
	   <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect waves-light purple darken-1'><b>Registrar usuario</b></button>
	    </form>
	  </div>
	</div>
@endsection