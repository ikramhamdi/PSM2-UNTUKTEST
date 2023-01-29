
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Patient') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container mt-2">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                
                            </div>
                            <div class="pull-right mb-2">
                                <a href="{{ url('/patient/create') }}" class="btn btn-success" title="Add New Patient">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add New Patient
                                </a>

                            </div>
                            
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Patient ID</th>
								<th>Patient Name</th>
								<th>Patient Age</th>
								<th>Patient Gender</th>
                                <th>Patient Race</th>
                                <th>Treatment Type</th>
                                <th>Treatment Date</th>
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
                                <td>{{ $patient->patientRace }}</td>
                                <td>{{ $patient->treatmentType }}</td>
                                <td>{{ $patient->treatmentDate }}</td>
            
                                    <td>
                                        <a href="{{ url('/patient/' . $patient->id) }}" title="View Patient"><button class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/patient/' . $patient->id . '/edit') }}" title="Edit Patient"><button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <form method="POST" action="{{ url('/patient' . '/' . $patient->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-warning" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    
                </div>
</x-app-layout>



    