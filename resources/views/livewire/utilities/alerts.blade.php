@if ($message = Session::get('success'))
    <div x-data x-init="callNotyf('{{ $message }}', 'success')">
    </div>
@endif

@if ($message = Session::get('error'))
    <div x-data x-init="callNotyf('{{ $message }}', 'error')">
        ">
    </div>
@endif

@if ($errors->any())
    <div x-data x-init="callNotyf('Something went wrong!', 'error')">
    </div>
@endif

<script>
    var callNotyf = function(message, type) {
        if (notyf) {
            notyf.dismissAll();
        }
        var notyf = new Notyf({
            duration: 3000,
            position: {
                x: 'right',
                y: 'top',
            },
        });
        notyf[type](message);
    };
</script>
