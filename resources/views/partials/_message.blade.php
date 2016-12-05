
@if(Session::has('success'))
    <div class="alert alert-success" role="alert" id="addPostSuccess">
        <strong>Success:</strong>{{  Session::get('success') }}
    </div>
@endif

@if(Session::has('deleteSuccess'))
    <div class="alert alert-success" role="alert" id="deletePostSuccess">
        <strong>Success:</strong>{{  Session::get('deleteSuccess') }}
    </div>
@endif

@if(Session::has('addCategorySuccess'))
    <div class="alert alert-success" role="alert" id="addCategorySuccess">
        <strong>Success:</strong>{{  Session::get('addCategorySuccess') }}
    </div>
@endif

@if(Session::has('addCategoryFaild'))
    <div class="alert alert-danger" role="alert" id="addCategoryFaild">
        <strong>Faild:</strong>{{  Session::get('addCategoryFaild') }}
    </div>
@endif

@if(Session::has('deleteSuccess'))
    <div class="alert alert-success" role="alert" id="deletePostSuccess">
        <strong>Success:</strong>{{  Session::get('deleteSuccess') }}
    </div>
@endif

@if(Session::has('tagAddSuccess'))
    <div class="alert alert-success" role="alert" id="tagaddsuccess">
        <strong>Success:</strong>{{  Session::get('tagAddSuccess') }}
    </div>
@endif

@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <strong>Errors:</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
