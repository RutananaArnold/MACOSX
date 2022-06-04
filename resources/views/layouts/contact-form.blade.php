<form id="contact-form" method="post" action="{{ route('messages.store') }}" class="custom-form form needs-validation" novalidate="">
    {{ csrf_field() }}
    
    <div class="controls">
        <div class="row">
            <div class="col-sm-6">
            <div class="form-group">
                <label for="name" class="form-label"> @lang('header.yourname') *</label>
                <input type="text" name="name" id="name" placeholder="@lang('header.yourname')" required="required" class="form-control">
                <div class="invalid-feedback"> @lang('header.error_yourname') </div>
            </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group">
                <label for="phone" class="form-label"> @lang('header.yourphone') </label>
                <input type="text" name="phone" id="phone" placeholder="@lang('header.yourphone')" class="form-control">
                <div class="invalid-feedback"> @lang('header.error_yourphone') </div>
            </div>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="form-label"> @lang('header.youremail') *</label>
            <input type="email" name="email" id="email" placeholder="@lang('header.youremail')" required="required" class="form-control">
            <div class="invalid-feedback"> @lang('header.error_youremail') </div>
        </div>
        <div class="form-group">
            <label for="message" class="form-label"> @lang('header.yourmessage') *</label>
            <textarea rows="4" name="message" id="message" placeholder="@lang('header.yourmessage')" required="required" class="form-control"></textarea>
            <div class="invalid-feedback"> @lang('header.error_yourmessage') </div>
        </div>
        <button type="submit" class="btn btn-primary"> @lang('header.sendmessage')</button>
    </div>
</form>