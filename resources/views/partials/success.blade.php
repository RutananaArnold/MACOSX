@if (session() -> has('success'))
    <div class="alert alert-dismissable alert-primary fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"> &times; </span>
        </button>
        
        <strong class="lead">
            <i class="fa fa-bullhorn"></i> {!! session() -> get('success') !!}
        </strong>
        
    </div>

@endif