{{--  メモ情報更新  --}}
@extends('layouts.memo')

@section('title', 'kouka3')

@section('menu_title')
メモ情報更新画面
@endsection

@section('content')
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
   <form action="/kouka3/update" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>name: </th><td><input type="text" name="name"
         value="{{$item->name}}"></td></tr>
      <tr><th>date: </th><td><input type="text" name="date"
         value="{{$item->date}}"></td></tr>
      <tr><th>memo: </th><td><input type="text" name="memo"
         value="{{$item->memo}}"></td></tr>
      <tr><th></th><td><input type="submit"
         value="更新"></td></tr>
   </table>
   </form>

      {{--  ホームに戻る  --}}
      <button type="button" onClick="history.back()">戻る</button>
@endsection

@section('footer')
MARINE MURAKAMI
@endsection
