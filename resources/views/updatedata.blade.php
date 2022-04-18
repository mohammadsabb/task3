@extends('layouts.app')

@section('content')
    <style>
        input {
            border: solid .5px rgb(50, 100, 90);
        }

        textarea {
            resize: none;
            border: solid .5px rgb(50, 100, 90);
        }

        form {
            font-size: large;
        }

        label {
            font-size: x-large;
        }

    </style>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Task Id</th>
                <th scope="col">Task Name</th>
            </tr>
        </thead>


        <form action="{{ route('update', [$task->id]) }}" method="POST">
            @method('PUT')
            <tbody>
                <tr>
                    <th scope="row">{{ $task->id }} </th>
                    <td>@csrf<input type="text" name="name" value="{{ $task->name }}"></td>

                    <td>
                        <button type="submit" class="btn btn-success">
                            Save
                        </button>
                    </td>
                </tr>
            </tbody>
        </form>

    </table>
@endsection
