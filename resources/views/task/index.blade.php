<!doctype html>
<html lang="en">

<head>
    <title>To-do List App Laravel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main class="container">
        <br>
        <div class="card">
            <div class="card-header">Create Task</div>
            <div class="card-body col-auto">
                <form class="col-form-control" action="{{ url('/') }}" method="post">
                    @csrf
                    <input type="text" class="form-control" name="task" id="task">

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary mt-3"  type="submit">Add</button>
                    </div>

                </form>
                <br>
                <h3>Task Lisk</h1>
                    <br>
                    <div class="table-responsive-sm d-flex">
                        <table class="table table-striper table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th class="table-primary col-2 justify-center" scope="col">Action</th>
                                    <th class="table-primary" scope="col">Task</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr class="table table-light">
                                        <td class="d-flex">
                                            <form action="{{ route('task.destroy', $task->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input class="btn btn-danger bg-danger" type="submit" value="Delete">
                                            </form>
                                        </td>
                                        <td>{{ $task->task }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

            </div>
        </div>

    </main>
    <footer>

    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
