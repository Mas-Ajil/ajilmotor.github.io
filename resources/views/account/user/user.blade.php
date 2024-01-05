@extends('account.layouts.main')

@section('container')
<style>
    /* Add a new CSS rule for the red color */
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    
}

    .content {
        max-width: 800px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.415);
        padding: 20px;
        margin-top: 20px;
        background-color: #fff;
   
        border-radius: 8px;
   
        width: 800px;
    }

    button {
        background-color: #3580dc;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 3px;
    }

    button:hover {
        background-color: #3580dc;
    }
    .edit {
        text-align: left;
    }

    table.edit {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th.edit,
    td.edit {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: left;
        position: relative;
    }

    .edit-link {
        display: inline-block;
        margin-left: 10px;
    }

    /* Responsive CSS */
    @media (max-width: 600px) {
        table.edit {
            display: block;
        }

        th.edit,
        td.edit {
            display: block;
            width: 100%;
            box-sizing: border-box;
        }

        th.edit {
            font-weight: bold;
        }

        .edit-link {
            margin-left: 0;
            margin-top: 10px; /* Add some spacing below the text */
        }
    }
</style>
<div class="col-md-3">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    @endif
    @if (session()->has('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('failed') }}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    @endif
<div class="content">
    <h1 class="edit">User Data</h1>
    <table class="edit">
        <tr>
            <th class="edit">Nama</th>
            <th class="edit">Email</th>
            <th class="edit">Action</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td class="edit">{{ $user->name }}</td>
                <td class="edit">{{ $user->email }}</td>
                <td class="edit">
                <a href="/user/edit/{{ $user->id }}"><button type="submit"><i class="bx bx-edit delete-icon"></i></button></a>
                </td>
            </tr>
        @endforeach
    </table>
</div>


@endsection


