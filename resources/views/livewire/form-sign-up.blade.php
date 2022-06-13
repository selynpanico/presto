
<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
            <form method="POST" action="{{route('register')}}">
                @csrf
                <div class="mb-3">
                    <label>{{__('ui.name')}}</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label>{{__('ui.surname')}}</label>
                    <input type="text" name="surname" class="form-control">
                </div>
                <div class="mb-3">
                    <label>{{__('ui.email_address')}}</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label >{{__('ui.password')}}</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label >{{__('ui.password_confirmation')}}</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-custom fw-bold my-5">{{__('ui.register')}}!</button>
            </form>
            </div>
        </div>
    </div>
</div>
