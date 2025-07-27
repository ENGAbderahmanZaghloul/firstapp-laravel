<x-layout>
    <x-slot:heading>
        All Posts
    </x-slot:heading>
    <section class="container mt-5">
    <div class="text-center">
        <button type="button" class="btn btn-success">Create post</button>
    </div>
    <table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">created by</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post['id']}}</th>
      <td>{{$post['title']}}</td>
      <td>{{$post['posted_by']}}</td>
      <td><div>
        <a href="/posts/{{ $post['id'] }}" class="btn btn-info">View</a>
        <a href="#" class="btn btn-primary">Edit</a>
        <a href="#" class="btn btn-danger">Delete</a>
      </div></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</section>
</x-layout>