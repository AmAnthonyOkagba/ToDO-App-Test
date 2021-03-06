<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ToDo App</title>

            <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"
        />
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet"
        />

    </head>
    <body>

        <section class="vh-100" style="background-color: #eee;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                  <div class="card rounded-3">
                    <div class="card-body p-4">

                      <h4 class="text-center my-3 pb-3">To Do App</h4>

                      <form action="{{ url('/add') }}" method="POST" class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
                        @csrf
                        <div class="col-12">
                          <div class="form-outline">
                            <input type="text" name="name" id="form1" class="form-control" />
                            <label class="form-label" for="form1">Enter a task here</label>
                          </div>
                        </div>

                        <div class="col-12">
                          <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                        <div class="col-12">
                          <button type="button" class="btn btn-warning">Get tasks</button>
                        </div>
                      </form>

                      <table class="table mb-4">
                        <thead>
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Todo item</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($todo as $todos)
                                <tr>
                                    <th scope="row">{{ $todos->id }}</th>
                                    <td>{{ $todos->name }}</td>
                                    <td>{{ $todos->status }}</td>
                                    <td>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        <button type="submit" class="btn btn-success ms-1">Finished</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>


        <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
    </body>
</html>
