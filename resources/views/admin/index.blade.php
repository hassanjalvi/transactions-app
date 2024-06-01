<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Transaction</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Add Transaction</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="background-color:#ff4f00">
                <strong>Success!</strong> {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <form action="/transactions" method="POST">
            @csrf
            <div class="mb-3">
                <label for="user_id" class="form-label">User ID</label>
                <input type="text" class="form-control" id="user_id" name="user_id" >
                @if ($errors->has('user_id'))
                    <span class="text-danger">
                        {{ $errors->first('user_id') }}
                    </span>
                @endif
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select class="form-select" id="type" name="type" >
                    <option value="payin">Payin</option>
                    <option value="payout">Payout</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status" >
                    <option value="pending">Pending</option>
                    <option value="success">Success</option>
                    <option value="failed">Failed</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" step="0.01" class="form-control" id="amount" name="amount" >
                @if ($errors->has('amount'))
                <span class="text-danger">
                    {{ $errors->first('amount') }}
                </span>
            @endif
            </div>
            <div class="mb-3">
                <label for="iscompleted" class="form-label">Is Completed</label>
                <input type="text"  class="form-control" id="is_completed" name="is_completed" >
                @if ($errors->has('is_completed'))
                <span class="text-danger">
                    {{ $errors->first('is_completed') }}
                </span>
            @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br>
        <a href="/manage" class="btn btn-secondary">Manage Transactions</a>
    </div>
    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
