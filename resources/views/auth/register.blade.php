@include('layouts.style')
<title>Registrate</title>
<body class="fondo">
    <div class="container p-5 fon">
        <div class="row fon">
            <div class="col-lg-6">
                <img src="{{asset('frontend/img/login.svg')}}" class="d-block mx-lg-auto img-fluid">
            </div>

            <div class="col-lg-4 px-4" action="">
          
                <div class="">
                <h1 class="fw-semibold">Paragon<b style="color:red; font-size:3rem;">+</b></h1>
                </div>
                
                <!-- Login -->
                <form action="/laravel/paragon/register" method="POST" >
                @csrf
                @include ('layouts.partials.messages')
                    <label for="" class="form-label">Ingresa tus datos para <b>Registrarte.</b></label>
                    <div class="row g-2">
                    <input type="text" class="form-control" name="name" placeholder="Nombres">
                        <div class="mb-3 col-sm">
                            <input type="text" class="form-control" name="username" placeholder="User">
                        </div>
                        <div class="mb-3 col-sm">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña">
                    </div>
                  
                    <div class="d-grid pb-3 pt-3 g-2">
                        <input type="submit" class="btn btn-purple" value="Registrate">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
 
