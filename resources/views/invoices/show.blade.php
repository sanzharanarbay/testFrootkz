@extends('layouts.app')


@push('styles')

@endpush


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-5">
                <h5>Show Invoice</h5>
                <hr>
            </div>
            <div class="col-md-12 pb-5">
                <div class="card">

                        <div class="row">
                            <div class="col-md-6 mb-5">
                                <label for="validationServer013">Number:</label>
                                <input type="text" class="form-control" id="validationServer013" name="number" value="{{$invoice->number}}" disabled >
                            </div>
                            <div class="col-md-6 mb-5">
                                <label for="validationServer013">Invoice Date:</label>
                                <input class="date form-control"  type="date" id="datepicker" name="invoice_date" value="{{date('Y-m-d', strtotime($invoice->invoice_date))}}" disabled>
                            </div>
                            <div class="col-md-6 mb-5">
                                <label for="validationServer013">Supply Date:</label>
                                <input class="date form-control"  type="date" id="datepicker" name="supply_date" value="{{date('Y-m-d', strtotime($invoice->supply_date))}}" disabled>
                            </div>
                            <div class="col-md-6 mb-5"></div>
                            <div class="col-md-12 mb-5">
                                <label for="validationServer013">Comment:</label>
                                <textarea name="comment" class="form-control" rows="5" disabled>
                                    {{$invoice->comment}}
                                </textarea>
                            </div>
                        </div>

                </div>
            </div>

        </div>
    </div>

    @push('scripts')

    @endpush



@endsection()
