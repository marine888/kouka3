@extends('layouts.memo')

@section('title', 'kouka3')

@section('menu_title')
ユーザ情報詳細画面

@endsection
@section('content')
   <table>
   <tr><th>Name</th><th>Mail</th></tr>
       <tr>
           <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>
       </tr>
   </table>
@endsection

@section('footer')
MARINE MURAKAMI
@endsection
