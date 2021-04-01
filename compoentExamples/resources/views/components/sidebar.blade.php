<!--attrib will allow styling symatics-->
<div {{$attributes}}>
    @foreach ($info as $information)
    <h1>{{$information}}</h1>
    @endforeach

    @foreach ($list('LAST') as $showList)
    <h1>{{$showList}}</h1>
    @endforeach
</div>