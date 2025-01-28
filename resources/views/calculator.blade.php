<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Calculator</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <h3>Laravel Calculator</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('calculator.calculate') }}">
                            @csrf
                            <!-- Number 1 Input -->
                            <div class="mb-3">
                                <label for="number1" class="form-label">First Number</label>
                                <input type="number" name="number1" class="form-control" placeholder="Enter first number" required>
                            </div>
                            <!-- Number 2 Input -->
                            <div class="mb-3">
                                <label for="number2" class="form-label">Second Number</label>
                                <input type="number" name="number2" class="form-control" placeholder="Enter second number" required>
                            </div>
                            <!-- Operation Select -->
                            <div class="mb-3">
                                <label for="operation" class="form-label">Operation</label>
                                <select name="operation" class="form-select">
                                    <option value="add">Add</option>
                                    <option value="subtract">Subtract</option>
                                    <option value="multiply">Multiply</option>
                                    <option value="divide">Divide</option>
                                </select>
                            </div>
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary w-100">Calculate</button>
                        </form>
                        <!-- Display Result -->
                        @if (session('result'))
                            <div class="alert alert-success mt-3 text-center">
                                <strong>Result:</strong> {{ session('result') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
