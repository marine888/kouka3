@extends('layouts.memo')

@section('title', 'kouka3')

@section('menu_title')
ユーザ情報削除画面
@endsection

@section('content')
   <form action="/kouka3/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>name: </th><td>{{$item->name}}</td></tr>
      <tr><th>email: </th><td>{{$item->email}}</td></tr>
      <tr><th>memo: </th><td>{{$item->memo}}</td></tr>
      <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
MARINE MURAKAMI
@endsection
