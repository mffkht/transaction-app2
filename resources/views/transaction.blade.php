<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Transaction Page</h1>
    <hr>
        <div>Transaction Title: {{ $transaction->transaction_title }}</div>
        <div>Description: {{ $transaction->description}}</div>
        <div>Status: {{ $transaction->status}}</div>
        <div>Total Amount: {{ $transaction->total_amount}}</div>
        <div>Transaction Number: {{ $transaction->tarnsaction_number}}</div>
        

        </hr>
        <form action="{{route('editTransaction', ['id'=> $transaction->id])}}" method="GET">
            
            <button type="submit">Edit</button>
        </form>
        <form action="{{route('deleteTransaction', ['id'=> $transaction->id])}}" method="POST"
        onsubmit="return confirm('delete?')">
            @csrf
            @method('delete')
            
            <button type="submit">Delete</button>
        </form>

        <form action="{{ route('showTransactions', ['id'=> $transaction->id])}}" method="GET">
            @method('GET')
            <button type="submit">Go back</button>
        </form>
</body>
</html>
