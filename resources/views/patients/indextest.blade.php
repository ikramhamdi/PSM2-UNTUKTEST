@extends('manage_patient.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Manage Patient</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/patient/create') }}" class="btn btn-success btn-sm" title="Add New Patient">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Patient
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
										<th>Patient ID</th>
										<th>Patient Name</th>
										<th>Patient Age</th>
										<th>Patient Gender</th>
										<th width="280px">Action</th>
									</tr>
                                </thead>
                                <tbody>
                                @foreach($patients as $patient)
                                    <tr>
                                        <td>{{ $patient->patientID }}</td>
									<td>{{ $patient->patientName }}</td>
									<td>{{ $patient->patientAge }}</td>
									<td>{{ $patient->patientGender }}</td>
 
                                        <td>
                                            <a href="{{ url('/patient/' . $patient->id) }}" title="View Patient"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/patient/' . $patient->id . '/edit') }}" title="Edit Patient"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/patient' . '/' . $patient->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Patient" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
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
    </div>
@endsection


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Patient') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <<div class="card-body">
                    <a href="{{ url('/patient/create') }}" class="btn btn-success btn-sm" title="Add New Patient">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Patient
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Patient ID</th>
                                    <th>Patient Name</th>
                                    <th>Patient Age</th>
                                    <th>Patient Gender</th>
                                    <th width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($patients as $patient)
                                <tr>
                                    <td>{{ $patient->patientID }}</td>
                                <td>{{ $patient->patientName }}</td>
                                <td>{{ $patient->patientAge }}</td>
                                <td>{{ $patient->patientGender }}</td>

                                    <td>
                                        <a href="{{ url('/patient/' . $patient->id) }}" title="View Patient"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/patient/' . $patient->id . '/edit') }}" title="Edit Patient"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/patient' . '/' . $patient->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Patient" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
</x-app-layout>
