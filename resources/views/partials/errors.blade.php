@if (isset($errors) && count($errors) > 0)
    <div class="alert alert-dismissable alert-primary fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"> &times; </span>
        </button>
        
        @foreach ($errors->all() as $error)
            <li class="lead"> <strong> {!! $error !!} </strong> </li>
        @endforeach
    
    </div>

@endif