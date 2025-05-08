@extends('layouts.master')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Transaction History</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Transaction History</a></li>
                        <li class="breadcrumb-item active">Transaction History</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">User</h4>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Program</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Date of Birth</th>
                                <th>Phone Number</th>
                                <th>Country</th>
                                <th>Employment Status</th>
                                <th>Education Level</th>
                                <th>Amount</th>
                                <th>Payment Status</th>
                            </tr>
                        </thead>
                        {{-- 'image_public_id',--}}

                        <tbody>
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $transaction->program }}</td>
                                    <td>{{ $transaction->name }}</td>
                                    <td>{{ $transaction->email }}</td>
                                    <td>{{ $transaction->gender }}</td>
                                    <td>{{ $transaction->dob->format('F j, Y') }}</td>
                                    <td>{{ $transaction->phone }}</td>
                                    <td>{{ $transaction->country }}</td>
                                    <td>{{ $transaction->employment_status }}</td>
                                    <td>{{ $transaction->education_level }}</td>
                                    <td>&#8358;{{ number_format($transaction->amount, 2) }}</td>
                                    <td>
                                        @switch($transaction->payment_status)
                                            @case(1)
                                                <span class="badge bg-success">Paid</span>
                                                @break
                                            @case(0)
                                                <span class="badge bg-danger">Not Paid</span>
                                                @break
                                            @default
                                                
                                        @endswitch
                                    </td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->   
    </div><!-- end row-->
</div>
<!-- container-fluid -->
@endsection