@extends('layots.main')
@section('main-container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5" style="margin-left:260px">
        <h1>Transactions</h1>

        <form method="GET" action="{{ route('transactions.index') }}" class="mb-3">
            <div class="form-group">
                <label for="status">Filter by Status:</label>
                <select name="status" id="status" class="form-control">
                    <option value="">All</option>
                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="success" {{ request('status') == 'success' ? 'selected' : '' }}>Success</option>
                    <option value="failed" {{ request('status') == 'failed' ? 'selected' : '' }}>Failed</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Amount</th>
                    <th>Is Completed</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->type }}</td>
                        <td>{{ $transaction->status }}</td>
                        <td>{{ $transaction->amount }}</td>
                        <td>{{ $transaction->is_completed ? 'Yes' : 'No' }}</td>
                        <td>{{ $transaction->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Display pagination links if more than 10 entities -->
        @if($transactions->total() > 10)
        <div class="d-flex justify-content-center">
            {{ $transactions->appends(request()->input())->links() }}
        </div>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
