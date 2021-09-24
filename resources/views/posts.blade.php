@extends('layouts.main')

@section('title', 'Integração #1')

@section('content')

<h1>Teste Integração com API jsonplaceholder.typicode</h1>
<table>
    <thead>
        <th>#ID</th>
        <th>#UserID</th>
        <th>#Title</th>
        <th>#Body</th>
        <tbody>

        </tbody>
        @foreach($posts as $post)
           <tr>
               <td>{{ $post->id }}</td>
               <td>{{ $post->userId }}</td>
               <td>{{ $post->title }}</td>
               <td>{{ $post->body }}</td>
           </tr> 
        @endforeach

    </thead>
</table>



@endsection