@extends('layouts.master')

@section('content')
<div>
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>My Warung</h2>
                        <div class="breadcrumb__option">
                            <span>Admin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Admin Section Begin -->
    <!-- Admin Section Begin -->
    <section class="shoping-cart spad">
        <div class="container" id="table_data_admin_produk">
            <h4 class="msg_header mb-2">Product</h4>
            <div class="shoping__cart__table">
                <table id="list-product" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Weight</th>
                            <th>Stock</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data['produk'] as $product)
                        <tr>
                            <td class="p-1">{{ $product->id_barang }}</td>
                            <td class="p-1">
                                <img src="{{asset($product->gambar_barang)}}" width="90px" alt="">
                            </td>
                            <td class="p-1">{{ $product->nama_barang }}</td>
                            <td class="p-1">{{ $product->harga_barang }}</td>
                            <td class="p-1">{{ $product->berat_barang }} gr</td>
                            <td class="p-1">{{ $product->stok_barang }}</td>
                            <td class="p-1">{{ $product->nama_kategori}}</td>
                            <td class="p-1">{{ $product->deskripsi_barang }}</td>
                            <td class="p-1" style="justify-content-center">
                                <span class="d-flex justify-content-around delete-span" style="border:none;"><a href="#"
                                        class="btn btn-success btn-sm">Edit</a>
                                    <input type="hidden" name="id_barang" value="{{$product->id_barang}}">
                                    <input type="submit" value="Delete" class="btn btn-danger delete-button btn-sm">
                                </span>

                            </td>
                        </tr>
                        @empty
                        <td colspan="4" class="text-center">No Product</td>
                        @endforelse
                        {{-- @include('admin.pagination') --}}
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Admin Section End -->
</div>
@endsection

@push('script')
<script src="{{asset('js/admin.js')}}"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
<script>
$(function() {
    $("#list-product").DataTable();
});
</script>

@endpush