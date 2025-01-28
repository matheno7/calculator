<form method="POST" action="{{ route('calculator.calculate') }}">
    @csrf
    <input type="number" name="number1" placeholder="Enter first number" required>
    <input type="number" name="number2" placeholder="Enter second number" required>
    <select name="operation">
        <option value="add">Add</option>
        <option value="subtract">Subtract</option>
        <option value="multiply">Multiply</option>
        <option value="divide">Divide</option>
    </select>
    <button type="submit">Calculate</button>
</form>
@if (session('result'))
    <p>Result: {{ session('result') }}</p>
@endif
