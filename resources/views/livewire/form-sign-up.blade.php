<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
            <form method="POST" action="{{route('register')}}">
                @csrf
                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Cognome</label>
                    <input type="text" name="surname" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Indirizzo email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label >Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label >Conferma password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Registrati!</button>
            </form>
            </div>
        </div>
    </div>
</div>
