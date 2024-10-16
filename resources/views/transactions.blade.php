<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Testing</h1>
    <form action = "{{ route('createTransaction')}}" method="GET">
        <button type="submit">Create Transaction</button>
    </form>
    
    @foreach ($transactions as $transaction)
        <hr>
        <div>Transaction Number: {{$transaction->id}}</div>
        <div>Transaction Title: {{ $transaction->transaction_title }}</div>
        <div>Description: {{ $transaction->description}}</div>
        <div>Status: {{ $transaction->status}}</div>
        <div>Total Amount: {{ $transaction->total_amount}}</div>

        </hr>

        <form action = "{{ route('viewTransaction', ['id'=> $transaction->id])}}" method="GET">
            <button type="submit">View Transaction</button>
        </form>
    @endforeach
</body>
</html>
