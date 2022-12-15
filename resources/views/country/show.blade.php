<x-layout>

<ul>
    @foreach($countries as $country)
            <li>
                {{$country->name}}
                <br>
        @foreach($country->city as $city)
                {{$city->name}}
            </li>
        @endforeach
    @endforeach
</ul>

</x-layout>