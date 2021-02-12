
<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">{{ __('INFORMATION GENERAL') }}</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('config.store') }}" class="mt-3">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="fw-medium fg-grey">{{  __('APP NAME') }}</label>
                        <input type="text" class="form-control" name="app_name" id="app_name" value="{{ $app_name }}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="fw-medium fg-grey">{{  __('TITLE') }}</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $title }}">
                    </div>
                    <div class="form-group">
                        <label for="message" class="fw-medium fg-grey">{{  __('DESCRIPTION') }}</label>
                        <textarea rows="6" class="form-control" name="description" id="description">{{ trim($description) }}</textarea>
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary">{{  __('Save') }}</button>
                    </div>
                </form>

                @include('messages.errors')
                @include('messages.success')
                
            </div>
            <!-- fin card -->
        </div>
    </div>
</div>