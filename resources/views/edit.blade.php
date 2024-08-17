<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Edit Student</h2>

        <form action="{{ route('updateStudent', $student->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $student->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value="{{ $student->email }}" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" name="phone" value="{{ $student->phone }}" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" name="address" rows="3" required>{{ $student->address }}</textarea>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" name="gender" required>
                    <option value="Male" {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
                    <option value="Other" {{ $student->gender == 'Other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" class="form-control" name="department" value="{{ $student->department }}" required>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="parttime" value="1" {{ $student->parttime ? 'checked' : '' }}>
                <label class="form-check-label" for="parttime">Part-time Student</label>
            </div>

            <div class="form-group">
                <label for="joined_date">Joined Date:</label>
                <input type="date" class="form-control" name="joined_date" value="{{ $student->joined_date }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>