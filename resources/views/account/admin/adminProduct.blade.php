@extends('account.layouts.main')

@section('container')
<style>
    .content {
        max-width: 100%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.415);
        padding: 20px;
        margin-top: 20px; 
    }

    h1.edit {
        font-size: 24px;
        margin-bottom: 20px;
    }

    table.edit {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th.edit, td.edit {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    td.edit-delete {
        border: 1px solid #ddd;
        margin: 10px;
        width: 100px;
        text-align: center;
    }

    th.edit {
        background-color: #f2f2f2;
    }

    img {
        max-width: 100px;
        max-height: 100px;
        border-radius: 5px;
    }

    button.edit {
        background-color: #3556dc;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 3px;
    }

    button.delete {
        background-color: #cd2334;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 3px;
    }

    button.edit:hover {
        background-color: #1e2e8f;
    }


    button.delete:hover {
        background-color: #a11728; 
    }


    
    .delete-icon {
        color: #fff;
    }
</style>

<div class="content">
    <h1 class="edit">Product List</h1>
    <table class="edit">
        <tr>
            
            <th class="edit">Gambar</th>
            <th class="edit">Nama</th>
            <th class="edit">Harga</th>
            <th class="edit">Deskripsi</th>
            <th class="edit">Action</th>

        </tr>
        @foreach ($products as $product)
            <tr>
                
                <td class="edit">
                    @if ($product->gambar)
                        <img src="{{ asset('storage/' . $product->gambar) }}" > 
                    @else
                        <img src="{{ $product['gambar'] }}" alt="{{ $product['nama'] }}">
                    @endif
                </td>
                <td class="edit">{{ $product->nama }}</td>
                <td class="edit">{{ $product->harga }}</td>
                <td class="edit">{{ $product->deskripsi }}</td>
                <td class="edit-delete">
                    <a href=""><button type="submit" class="edit"><i class="bx bx-edit edit-icon"></i></button></a>
                    <form onsubmit="return confirm('Tekan untuk menghapus data');" action="{{ route('delete.product', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete"><i class="bx bx-trash delete-icon"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>

@endsection