@extends('layout.main')
@section('content')
{!!$name!!} <br>
    {{$age}}

<hr>
{{-- @php
$fruit = ['mango','apple','orange','banana'];
@endphp
@for($i=0;$i<4;$i++)
<h3> {{$fruit[$i]}}</h3>
@endfor --}}
@endsection

{{-- @section('javascript')
    <script>
        // alert('hello developer Wai Linn Kyaw ! NOW you are testing laravel');
        // text design in aler methods
          Swal.fire({
            title: '<span style="color: red;">Custom Alert</span>',
            html: '<span style="color: blue;">This is a custom alert with blue text.</span>',
            icon: 'info'
          });

    </script>
@endsection --}}

