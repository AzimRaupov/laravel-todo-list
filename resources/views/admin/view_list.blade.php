@extends('layouts.app')

@section('content')

    <div class="card">
        <h5 class="card-header">Table Basic</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Status</th>
                  <th>Priority</th>
                    <th>Create At</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($todos as $l)

                    <tr>
                        <td><i class="bx bxl-angular bx-md text-danger me-4"></i> <span>{{$l->name}}</span></td>
                        <td><span class="badge bg-label-primary me-1">{{$l->status}}</span></td>
                        <td><span class="badge bg-label-danger me-1">{{$l->priority}}</span></td>
                        <td>{{$l->created_at}}</td>

                        <td>

                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <form action="{{route('delete',$l)}}" method="post">
                                        @method('post')
                                        @csrf
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </form>

                                    <a class="btn btn-outline-primary" href="{{route('edit',$l)}}">edit</a>

                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
