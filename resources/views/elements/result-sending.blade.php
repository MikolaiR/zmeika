<div class="row">
    @if(session('success_message'))
        <div data-form-alert=""
             class="alert alert-success col-12">{{ session('success_message') }}</div>
    @endif
    @if(session('error_message'))
        <div data-form-alert-danger=""
             class="alert alert-danger col-12">{!! session('error_message') !!}</div>
    @endif
</div>
