@extends('coursesbase')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Courses</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Title</td>
          <td>Content</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{$courses->title}}</td>
            <td>{{$courses->content}}</td>
            <td>
                <a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div>
    <a style="margin: 19px;" href="{{ route('courses.create')}}" class="btn btn-primary">New content</a>
</div>  
</div>
@endsection