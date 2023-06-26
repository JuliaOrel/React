<h1>Hello from blade</h1>
<p>{{$userName}}</p>
<p>{{$hack}}</p>

@if($iterator <5)
    <p>less than 5</p>
@else
    <p>more than 5</p>
@endif

@foreach($users as $user) @endforeach

<ul>
    @for($i=0; $i<$iterator; $i++)
        <li>{{$i}}</li>
        @endfor
</ul>
<?php
