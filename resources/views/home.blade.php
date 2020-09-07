@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-xl-12 col-lg-12 pb-5">
            <h3>Invoices</h3>
            <hr>
        </div>
        <div class="col-md-12 col-sm-12 col-xl-12 col-lg-12 pb-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-left">Actions</h5><br>
                    @if($user->hasRole('admin') || $user->hasRole('moderator'))
                    <a class="btn btn-primary" href="{{route('invoice.create')}}">Add new</a>
                        @endif
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xl-12 col-lg-12">
            @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{ Session::get('flash_message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">Invoices</div>

                <div class="card-body">
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Invoice Date</th>
                                    <th scope="col">Supply Date</th>
                                    <th scope="col">Comment</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($invoices as $invoice)
                                <tr>
                                    <td>{{$invoice->number}}</td>
                                    <td>{{$invoice->invoice_date}}</td>
                                    <td>{{$invoice->supply_date}}</td>
                                    <td>{{$invoice->comment}}</td>
                                    <td>{{$invoice->created_at}}</td>
                                    <td>
                                        @if($user->hasRole('admin') || $user->hasRole('moderator'))
                                            <a class="btn btn-warning btn-sm" href="{{route('invoice.show', $invoice->id)}}">Show</a>
                                            <a class="btn btn-success btn-sm" href="{{route('invoice.edit', $invoice->id)}}">Edit</a>
                                        @endif
                                            @if($user->hasRole('admin'))
                                                <form id="delete-form-{{$invoice->id}}" action="{{route('invoice.destroy',
                                               $invoice->id)}}" style="display:none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm"
                                                        onclick="if(confirm('Are you sure?')){
                                                            event.preventDefault();
                                                            document.getElementById('delete-form-{{$invoice->id}}').submit();
                                                            }else{
                                                            event.preventDefault();

                                                            }">
                                                    Delete</button>
                                            @endif
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
@endsection
