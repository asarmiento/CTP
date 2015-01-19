 <div class="form-group">
            {{Form::label($name,$label)}}       
            {{$control}}   
            @if($error)
            <p class="errorMessage">{{$error}}</p>
            @endif
           
        </div>