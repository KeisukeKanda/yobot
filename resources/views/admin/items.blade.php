
@extends('layouts.app_admin')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            本サービスで扱う推奨項目の登録と一覧
        </div>
        
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->

        <!-- 推奨項目登録フォーム -->
        <form enctype="multipart/form-data" action="{{ url('admin/items') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-row">
                <div class="form-group col-md-6">
                    <!-- file 追加 -->
                    <div class="col-sm-6"> 
                        <label>画像</label>
                        <input type="file" name="item_img">
                    </div>
                    
                    <!-- 推奨項目名 -->
                    <label for="item" class="col-sm-3 control-label">推奨項目名</label>
                    <input type="text" name="item_name" class="form-control">
                    
                    <!-- 表示内容 -->
                    <label for="content" class="col-sm-3 control-label">表示内容</label>
                    <textarea name="item_content" class="form-control" placeholder="施行間隔などを入力"></textarea>
                </div>
            </div>
            

            <!-- 推奨項目 登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        登録
                    </button>
                </div>
            </div>
        </form>
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
                                
                                <!-- 推奨項目: 更新ボタン -->
                                <td>
                                    <form action="{{ url('admin/items_edit/'.$item->id) }}" method="POST">
                                         {{ csrf_field() }}
                                        <button type="submit" class="btn btn-primary">
                                            更新
                                        </button>
                                    </form>
                                </td>

                                <!-- 推奨項目: 削除ボタン -->
                                <td>
                                    <form action="{{ url('admin/item/'.$item->id) }}" method="POST">
                                         {{ csrf_field() }}
                                         {{ method_field('delete') }}
                                        
                                        <button type="submit" class="btn btn-danger">
                                            削除
                                        </button>
                                    </form>
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
