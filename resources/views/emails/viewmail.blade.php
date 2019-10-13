@extends('layouts.main')
@section('content')
<div class="container">
    <form id="myForm" method="POST" action="{{ route('sendemail') }}">
    <div class="row">
        @csrf
        <div class="col-md-4 col-lg-4">
                <label for="teacher_id" style="font-size:18px;" class="col-form-label text-md-right">{{ __('To : ') }}</label>
                <div class="form-group" >
                        <select class="form-control"  name="standard" id="standard">
                                <option  class="down" value="8">Standard VIII</option>
                                <option  class="down" value="9">Standard IX</option>
                                <option  class="down" value="10">Standard X</option>
                        </select>
                    </div>
        </div>
        <div class="col-md-2 col-lg-2"></div>
        <div class="col-md-6 col-lg-6">
            <label for="teacher_id" style="font-size:18px;" class="col-form-label text-md-right">{{ __('Names of Students : ') }}</label>
            <div id="print">

            </div>
        </div>
        <input type="hidden" name="studentsinfo" id="imp">
        </div>
        <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="button" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
<script>
        $(document).ready(function() {
            $('#standard').change(function() {
                $('#print').children().remove().end();
                var hi = $(this).val();
                var students = <?php echo json_encode($students); ?>;
                $('#print').html(students);
                // console.log(students);
                $.each(students, function () {
                    var flag=0
                    var i = 0;
                    $.each(this, function (name, value) {
                    if(name=="standard" && value==hi){
                        flag = 1;
                    }
                    });
                    if(flag==1)
                    {
                        $.each(this, function (name, value) {
                        if(name=="name"){
                            let l3 = document.createElement('LABEL');
                            l3.setAttribute("for","student_"+i);
                            l3.setAttribute("class","form-control");
                            l3.innerHTML=value;
                            document.getElementById('print').appendChild(l3);

                            let i1 = document.createElement('INPUT');
                            i1.setAttribute("type","checkbox");
                            i1.setAttribute("name","students");
                            i1.setAttribute("id","students");
                            i1.setAttribute("value",value);
                            document.getElementById('print').appendChild(i1);
                        }
                        });
                    }
                    i++;
                });
            });
            $("button"). click(function(){
                var favorite = [];
                $. each($("input[name='students']:checked"), function(){
                favorite. push($(this). val());
                });
                console.log(favorite);
                $('#imp').val(favorite);
                console.log($('#imp').val())
                $('#myForm').submit();
        })
        });
    </script>
@endsection