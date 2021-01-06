@if(count($errors)>0)

<div class="row">
    <div class="col error">
        <ul>
            @foreach($errors->all() as $error)
            {{$error}}
            @endforeach
        </ul>
    </div>
</div>
<div class="col">
</div>
@endif

@if(Session::has('message'))
<div class="row">
        <div class="col success">
            <ul>
                {{Session::get('message')}}
            </ul>
        </div>
</div>
<div class="col">
</div>
@endif