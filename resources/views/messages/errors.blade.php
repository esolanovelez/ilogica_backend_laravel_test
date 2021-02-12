<script>
    $(document).on('ready', function() 
        {
            var toastElList = [].slice.call(document.querySelectorAll('.toast'))
            var toastList = toastElList.map(function (toastEl) {
                return new bootstrap.Toast(toastEl, {})
            })           
        }
    );
</script>
@if (isset($errors))
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <p>Incomplete information:</p>
            <ul>
                @foreach ($errors as $message)
                    <li>{{ $message[0] }}</li>
                @endforeach
            </ul>
        </div>
        <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-bs-autohide="false">
            <div class="toast-header">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    @endif
@endif