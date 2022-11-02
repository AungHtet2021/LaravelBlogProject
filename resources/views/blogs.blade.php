

<x-layout>
    <x-slot name="title"><title>All blog</title></x-slot>
    @foreach ($blogs as $blog)
{{-- @dd($loop) --}}
 <div class="{{$loop->odd ? 'bg-color':''}}">
     <h1><a href="blogs/{{$blog->slug}}">{{$blog->title}}</a></h1>
     <div>
      <p>published at {{$blog->date}}</p>
      <p>{{$blog->intro}}</p>
     </div>
 </div>
@endforeach;
</x-layout>



