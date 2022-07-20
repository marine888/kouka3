@extends('layouts.memo')

@section('title', 'kouka3')

@section('menu_title')
ユーザ情報新規登録画面
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
   <form action="/kouka3/create" method="post">
   <table>
      @csrf
      <tr><th>member_id: </th><td><input type="text" name="member_id" value="{{old('member_id')}}"></td></tr>
      <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
      <tr><th>date: </th><td><input type="text" name="date" value="{{old('date')}}"></td></tr>
      <tr><th>memo: </th><td><input type="text" name="memo" value="{{old('memo')}}"></td></tr>
      <tr><th></th><td><input type="submit" value="新規登録"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
MARINE MURAKAMI
@endsection
