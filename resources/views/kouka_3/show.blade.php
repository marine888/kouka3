{{--  メモ詳細画面  --}}
@extends('layouts.memo')

@section('title', 'kouka3')

@section('menu_title')
メモ詳細画面

@endsection
@section('content')
   <table>
   <tr><th>Name</th><th>Date</th><th>Memo</th></tr>
       <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->date}}</td>
        <td>{{$item->memo}}</td>
       </tr>
   </table>

   {{--  ホームに戻る  --}}
   <button type="button" onClick="history.back()">戻る</button>
@endsection

@section('footer')
MARINE MURAKAMI
@endsection
