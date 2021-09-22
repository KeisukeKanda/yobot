@extends('layouts.app')
@section('content')
    <div id="firstview">
        <h1>最高の健康を手に入れよう</h1>
    </div>
    
    @if (
    count($results1) + 
    count($results2) + 
    count($results3) + 
    count($results4) + 
    count($results5) + 
    count($results6) + 
    count($results7) + 
    count($results8) === 0)
    <h3>結果の登録はありません</h3>
    @endif

    @if (count($results1) > 0)
    <div class="card-body">
        <table class="table table-striped task-table">
            <thead>
                <th>定期検診</th>
                <th>&nbsp;</th>
            </thead>
            <tbody>
                @foreach ($results1 as $result1)
                <tr>
                    <td class="table-text">
                        <div>{{ $result1->done_date }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $result1->result_comment }}</div>
                    </td>
                    <td>
                        <a href="{{ url('mypage/results/'.$result1->id) }}" class="btn btn-primary">結果</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
    
    @if (count($results2) > 0)
    <div class="card-body">
        <table class="table table-striped task-table">
            <thead>
                <th>子宮頸がん検診</th>
                <th>&nbsp;</th>
            </thead>
            <tbody>
                @foreach ($results2 as $result2)
                <tr>
                    <td class="table-text">
                        <div>{{ $result2->done_date }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $result2->result_comment }}</div>
                    </td>
                    <td>
                        <a href="{{ url('mypage/results/'.$result2->id) }}" class="btn btn-primary">結果</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
    
    @if (count($results3) > 0)
    <div class="card-body">
        <table class="table table-striped task-table">
            <thead>
                <th>乳がん検診</th>
                <th>&nbsp;</th>
            </thead>
            <tbody>
                @foreach ($results3 as $result3)
                <tr>
                    <td class="table-text">
                        <div>{{ $result3->done_date }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $result3->result_comment }}</div>
                    </td>
                    <td>
                        <a href="{{ url('mypage/results/'.$result3->id) }}" class="btn btn-primary">結果</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
    
    @if (count($results4) > 0)
    <div class="card-body">
        <table class="table table-striped task-table">
            <thead>
                <th>肺がん検診</th>
                <th>&nbsp;</th>
            </thead>
            <tbody>
                @foreach ($results4 as $result4)
                <tr>
                    <td class="table-text">
                        <div>{{ $result4->done_date }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $result4->result_comment }}</div>
                    </td>
                    <td>
                        <a href="{{ url('mypage/results/'.$result4->id) }}" class="btn btn-primary">結果</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
    
    @if (count($results5) > 0)
    <div class="card-body">
        <table class="table table-striped task-table">
            <thead>
                <th>胃がん検診</th>
                <th>&nbsp;</th>
            </thead>
            <tbody>
                @foreach ($results5 as $result5)
                <tr>
                    <td class="table-text">
                        <div>{{ $result5->done_date }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $result5->result_comment }}</div>
                    </td>
                    <td>
                        <a href="{{ url('mypage/results/'.$result5->id) }}" class="btn btn-primary">結果</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
    
    @if (count($results6) > 0)
    <div class="card-body">
        <table class="table table-striped task-table">
            <thead>
                <th>大腸がん検診</th>
                <th>&nbsp;</th>
            </thead>
            <tbody>
                @foreach ($results6 as $result6)
                <tr>
                    <td class="table-text">
                        <div>{{ $result6->done_date }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $result6->result_comment }}</div>
                    </td>
                    <td>
                        <a href="{{ url('mypage/results/'.$result6->id) }}" class="btn btn-primary">結果</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
    
    @if (count($results7) > 0)
    <div class="card-body">
        <table class="table table-striped task-table">
            <thead>
                <th>骨密度検査</th>
                <th>&nbsp;</th>
            </thead>
            <tbody>
                @foreach ($results7 as $result7)
                <tr>
                    <td class="table-text">
                        <div>{{ $result7->done_date }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $result7->result_comment }}</div>
                    </td>
                    <td>
                        <a href="{{ url('mypage/results/'.$result7->id) }}" class="btn btn-primary">結果</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
    
    @if (count($results8) > 0)
    <div class="card-body">
        <table class="table table-striped task-table">
            <thead>
                <th>インフルエンザ予防接種</th>
                <th>&nbsp;</th>
            </thead>
            <tbody>
                @foreach ($results8 as $result8)
                <tr>
                    <td class="table-text">
                        <div>{{ $result8->done_date }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $result8->result_comment }}</div>
                    </td>
                    <td>
                        <a href="{{ url('mypage/results/'.$result8->id) }}" class="btn btn-primary">結果</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
        
        
        

@endsection