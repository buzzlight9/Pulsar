<section>
    <div class="row">
        @if(count($errors) > 0)
            <div class="box-body">
                @foreach($errors->all() as $error)
                    <div class="col-lg-6">
                        <p class="alert alert-danger">{{ $error }}</p>
                    </div>
                @endforeach
            </div>
        @endif
        @if(session()->has('message'))
            <div class="box-body">
                <div class="col-lg-6">
                    <p class="alert alert-success">{{ session('message') }}</p>
                </div>
            </div>
        @endif
    </div>
    <div class="row">
        
    </div>
</section>