@extends('layouts.app')


@section('content')
    <form action="{{route('update',$list)}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$list->id}}">
        <div class="mt-2 mb-4">
            <label for="largeInput" class="form-label">Name List</label>
            <input
                id="largeInput"
                class="form-control form-control-lg"
                type="text"
                name="name"
                value="{{$list->name}}"
                placeholder="Name List" />
        </div>

        <div>
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" >{{$list->description}}</textarea>
        </div>
        <div class="mt-2 mb-4">
            <label for="largeSelect" class="form-label">Status</label>
            <select id="largeSelect" class="form-select form-select-lg" name="status" >
                <option value="{{$list->status}}" style="display:none;" disabled>{{$list->status}}</option>
                <option value="completed">Completed</option>
                <option value="in_progress">IN Progress</option>
                <option value="not_started">Not Started</option>
            </select>
        </div>
        <div class="mt-2 mb-4">
            <label for="largeSelect" class="form-label">Priority</label>
            <select id="largeSelect" class="form-select form-select-lg" name="priority">
                <option value="{{$list->priority}}" style="display:none;" disabled>{{$list->priority}}</option>

                <option value="high">High</option>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
            </select>
        </div>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
@endsection
