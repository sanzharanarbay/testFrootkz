@extends('layouts.app')


@push('styles')

@endpush


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-sm-12 col-xl-12 col-lg-12 pb-5">
                <h5>Update Invoice</h5>
                <hr>
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="col-md-12 pb-5">
                <div class="card">

                    <form method="POST" action="{{route('invoice.update', $invoice->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-5">
                                <label for="validationServer013">Number:</label>
                                <input type="text" class="form-control" id="validationServer013" name="number" value="{{$invoice->number}}">
                            </div>
                            <div class="col-md-6 mb-5">
                                <label for="validationServer013">Invoice Date:</label>
                                <input class="date form-control"  type="date" id="datepicker" name="invoice_date" value="{{date('Y-m-d', strtotime($invoice->invoice_date))}}">
                            </div>
                            <div class="col-md-6 mb-5">
                                <label for="validationServer013">Supply Date:</label>
                                <input class="date form-control"  type="date" id="datepicker" name="supply_date" value="{{date('Y-m-d', strtotime($invoice->supply_date))}}">
                            </div>
                            <div class="col-md-6 mb-5"></div>
                            <div class="col-md-12 mb-5">
                                <label for="validationServer013">Comment:</label>
                                <textarea name="comment" class="form-control" rows="5">
                                    {{$invoice->comment}}
                                </textarea>
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-success btn-sm mr-4 mt-2" type="submit">Update</button>
                        </div>
                        <br>

                    </form>
                </div>
            </div>

        </div>
    </div>

    @push('scripts')

    @endpush



@endsection()
