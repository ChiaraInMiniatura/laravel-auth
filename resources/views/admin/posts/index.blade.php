@extends('layouts.app')

@section('content')
<div class="container">

 <h1>Index della CRUD</h1>
 <table class="table">
     <thead>
       <tr>
         <th scope="col">Id</th>
         <th scope="col">Titolo</th>
         <th scope="col">Azioni</th>

       </tr>
     </thead>
     <tbody>
        {{-- ciclo non funziona perchè non parte seeder --}}
         @foreach ($posts as $post )

         <tr>
           <th scope="row">{{ $post->id }}</th>
           <td>{{ $post->title }}</td>
           <td>X</td>

         </tr>

         @endforeach

     </tbody>
   </table>

</div>
@endsection
