<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>{{__('ui.login')}}</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center align-items-center "> 
        <div class="col-12 col-md-6">

        <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1">{{__('ui.email_address')}}</label>
                <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1">{{__('ui.password')}}</label>
                <input type="password" name='password' class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-custom fw-bold">{{__('ui.login')}}</button>
        </form>
        </div>
    </div>
</div>
</x-layout>