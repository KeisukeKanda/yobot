@extends('layouts.app_admin')
@section('content')
<h3>【institutionsテーブルへのExcel/CSVのインポート】</h3>
<form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<input type="file" name="file">
		<br><br>
		<button class="btn btn-success">ボタンをクリック</button>
	</div>
</form>

<h3>【available_institutionsテーブルへのExcel/CSVのインポート】</h3>
<form action="{{ route('import.available') }}" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<input type="file" name="file">
		<br><br>
		<button class="btn btn-success">ボタンをクリック</button>
	</div>
</form>
@endsection
