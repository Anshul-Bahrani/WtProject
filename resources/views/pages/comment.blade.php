    @extends('layouts/main')
    @section('content')
        <form method="POST" action="{{ url('/comment') }}" aria-label="{{ __('Comment') }}">
            @csrf

            <select name="standard" id="standard">
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
            </select>
              <div id="print">

              </div>
            <div class="form-group row">
                    <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('Comment') }}</label>

                    <div class="col-md-6">
                        <input id="comment" type="text" class="form-control" name="comment" required autocomplete="comment">
                    </div>
            </div>
            <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Submit') }}
                        </button>
                    </div>
                </div>
                <script>
                        $(document).ready(function() {
                            $('#standard').change(function() {
                                var hi = $(this).val();
                                $('#print').html(hi);
                                var students = <?php echo json_encode($students); ?>;
                                $('#print').html(students);
                                console.log(students);
                            });
                        });
                       
                    </script>
    @endsection