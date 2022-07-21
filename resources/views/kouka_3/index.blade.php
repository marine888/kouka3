{{--  メインページ  --}}
@extends('layouts.memo')

@section('title', 'kouka3')

@section('menu_title')
メモ
@endsection

@section('content')
    <form action="/kouka3/find" method="post">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="検索">
    </form>
   <a href="/kouka3/add">Register Now</a>
   <table>
    <tr><th>Name</th><th>Date</th><th>Memo</th><th>Detail</th><th>Update</th><th>Delete</th></tr>
    @foreach ($items as $item)
        <tr>
         <td>{{$item->name}}</td>
         <td>{{$item->date}}</td>
         <td>{{$item->memo}}</td>
           <td><a href="/kouka3/show?id={{$item->id}}">Detail</a></td>
           <td><a href="/kouka3/edit?id={{$item->id}}">Update</a></td>
           <td><a href="/kouka3/del?id={{$item->id}}">Delete</a></td>
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
MARINE MURAKAMI
@endsection
