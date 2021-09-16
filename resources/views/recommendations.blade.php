<!-- resources/views/books.blade.php -->
@extends('layouts.app')
@section('content')
    <!-- Recommendations: 推奨される項目の一覧 -->
    <div id="firstview">
        <h1>最高の健康を手に入れよう</h1>
    </div>
    
    
    <!-- Item: 既に登録されてる推奨項目のリスト -->
    @if (count($items) > 0)
        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>推奨項目一覧</th>
                        <th>&nbsp;</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <!-- 推奨項目タイトル -->
                                <td class="table-text">
                                    <div> <img src="../upload/{{$item->item_img}}" width="100"></div>
                                    <div>{{ $item->item_name }}</div>
                                </td>
                                
                                <!-- 推奨項目内容 -->
                                <td class="table-text">
                                    <div>{{ $item->item_content }}</div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-4">
               {{ $items->links()}}
             </div>
        </div>
    @endif

@endsection

