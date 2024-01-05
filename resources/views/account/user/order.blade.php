@extends('account.layouts.main')

@section('container')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        @media screen and (max-width: 600px) {
            th, td {
                display: block;
                width: 100%;
                box-sizing: border-box;
            }

            th {
                text-align: center;
            }
        }
    </style>

<div class="content">
    <h2>Your Purchased Products</h2>

    @if(count($purchasedProducts) > 0)
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($purchasedProducts as $purchase)
                    <tr>
                        <td>{{ $purchase->product->nama }}</td>
                        <td>{{ $purchase->product->harga }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No purchased products yet.</p>
    @endif
</div>



@endsection
