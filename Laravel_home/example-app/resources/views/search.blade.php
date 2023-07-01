<h1> Cities </h1>
<div> {{ $sql }}</div>
<form action="{{route('cities-search')}}" method="GET">
    <label>City like <input type="text" name="search" value="{{$search}}"></label>
    <input type="submit">

    <table>
        <thead>
        <tr>
            <th><input type="radio" name="orderBy" value="id">Id</th>
            <th><input type="radio" name="orderBy" value="city">City</th>
{{--                    <th> <a href="{{route('cities-search')}}/?orderBy=id">id </a></th>--}}
{{--                    <th> <a href="{{route('cities-search')}}/?orderBy=city"> city </a></th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach($cities as $city)
            <tr>
                <td>{{$city->getAttribute('id')}}</td>
                <td>{{$city->getAttribute('city')}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</form>
