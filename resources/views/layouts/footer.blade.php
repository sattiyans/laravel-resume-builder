
    <script src="{{asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ url('assets/js/builder.js') }}"></script>
    <script>
        document.getElementById("job_end_date").value = new Date().toISOString().split('T')[0];
    </script>

@php
    
    /**
     *  Alert
     */
    $message = '';
    $icon = '';
    
    if (!empty($errors->all())) {
        $icon = 'error';
        $message = $errors->first();
    } elseif (session()->has('success')) {
        $icon = 'success';
        $message = session()->get('success');
    } elseif (session()->has('error')) {
        $icon = 'error';
        $message = session()->get('error');
    } elseif (!empty($success)) {
        $icon = 'success';
        $message = $success;
    }
    
@endphp

    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'center',
            showConfirmButton: false,
            timer: 3000
        });
        var message = '{{ $message }}';
        var icon = '{{ $icon }}';
        if (message.length > 0) {
            Toast.fire({
                icon: icon,
                title: message
            });
        }
    </script>
    <script>
        // Delete Confirmation
        function confirm_form_delete(element) {
            var form = $(element).closest("form");

            Swal.fire({
                title: `Are you sure you want to delete this resume?`,
                text: "If you delete this, it will be gone forever.",
                customClass: {
                    cancelButton: 'btn btn-danger'
                },
                showCancelButton: true,
                cancelButtonText: 'No',
                cancelButtonColor: '#ce4242',
                confirmButtonColor: '#004A99',
                confirmButtonText: `Yes`,
                closeOnConfirm: false
            }).then((result) => {

                if (!result.isConfirmed) return;

                jQuery(form).submit();

            });
        }

        //Save confirmation
        function confirm_form_submit(element) {
            var form = $(element).closest("form");

            Swal.fire({
                title: `Are you sure all the details are correct?`,
                text: "Yoo won't be able to edit this resume after this.",
                customClass: {
                    cancelButton: 'btn btn-danger'
                },
                showCancelButton: true,
                cancelButtonText: 'No',
                cancelButtonColor: '#ce4242',
                confirmButtonColor: '#004A99',
                confirmButtonText: `Yes`,
                closeOnConfirm: false
            }).then((result) => {

                if (!result.isConfirmed) return;

                jQuery(form).submit();

            });
        }
    </script>
</html>
