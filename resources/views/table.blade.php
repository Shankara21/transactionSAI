@extends('welcome')
@section('content')
<div class="container">
    <h1 class="text-center">Transaction</h1>
    <form action="/transactions" method="POST">
        @csrf
        <input type="month" name="date" id="">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Items</th>
                @foreach ($dates as $date)
                <th scope="col">{{$date}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <th scope="row">{{ $item['name'] }}</th>
                @foreach ($item['data'] as $data)
                <td>{{ number_format($data, 2) }}</td>
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
