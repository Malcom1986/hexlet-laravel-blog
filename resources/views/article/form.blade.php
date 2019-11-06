@if(count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
@endif
    

{{Form::label('name', 'Article name')}}
{{Form::text('name')}} <br>
{{Form::label('boby', 'Content')}}
{{Form::textarea('body')}} <br>

