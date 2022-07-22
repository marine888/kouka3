{{--  メモ情報削除  --}}
@extends('layouts.memo')

@section('title', 'kouka3')

@section('menu_title')
メモ情報削除画面
@endsection

@section('content')
   <form action="/kouka3/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>name: </th><td><input type="text" name="name" value="{{$item->name}}"></td></tr>
      <tr><th>date: </th><td><input type="text" name="date" value="{{$item->date}}"></td></tr>
      <tr><th>memo: </th><td><input type="text" name="memo" value="{{$item->memo}}"></td></tr>
      <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   </form>

 {{--  ホームに戻る  --}}
      <button type="button" onClick="history.back()">戻る</button>
@endsection

@section('footer')
MARINE MURAKAMI
@endsection
