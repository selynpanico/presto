<footer>
<div class="social-container h-100"> 
    <div class="row m-0 justify-content-end">
        <div class="col-12 d-flex flex-column align-items-center my-2 py-2 text-white text-center"> 
            <h5>{{__('ui.work_for_us')}}</h5>
            <h6>{{__('ui.work_for_us_subtitle')}}</h6>
             @if(Auth::user())
                <livewire:revisor-request-button />
             @else
                <a class="btn btn-light" href="{{route('register')}}">{{__('ui.register_to_work')}}</a>
            @endif  
        </div>
        <div class="col-12 col-md-6">
            <h6 class="text-white text-end  mb-0 py-2">follow us
            <i class="bi bi-instagram"></i>
            <i class="bi bi-github"></i>
            <i class="bi bi-facebook"></i>
            </h6>
        </div>
    </div>
</div>
</footer>