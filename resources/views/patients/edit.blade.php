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
                            <div class="pull-left mb-2">
                                <h2>Add Patient</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('dashboard.managePatient') }}"> Back</a>
                            </div>
                        </div>
                    </div>
                    @if(session('status'))
                    <div class="alert alert-success mb-1 mt-1">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ url('patient/' .$patients->id) }}" method="POST">
                        {!! csrf_field() !!}
                        @method("PATCH")

                            <input type="hidden" name="id" id="id" value="{{$patients->id}}" id="id" />

                            <label>Patient Name</label></br>
                            <input type="text" name="patientName" id="patientName" value="{{$patients->patientName}}" class="form-control"></br>

                            <label>Patient Age</label></br>
                            <input type="number" name="patientAge" id="patientAge" value="{{$patients->patientAge}}" class="form-control"></br>

                            <label>Patient Gender</label></br>
                            <input type="text" name="patientGender" id="patientGender" value="{{$patients->patientGender}}" class="form-control"></br>

                            <label>Patient Race</label></br>
                            <input type="text" name="patientRace" id="patientRace" value="{{$patients->patientRace}}" class="form-control"></br>

                            <label>Treatment Type</label></br>
                            <input type="text" name="treatmentType" id="treatmentType" value="{{$patients->treatmentType}}" class="form-control"></br>

                            <label>Treatment Date</label></br>
                            <input type="date" name="treatmentDate" id="treatmentDate" value="{{$patients->treatmentDate}}" class="form-control"></br>

                            <input type="submit" value="Update" class="btn btn-warning"></br>
                        </form>
                </div>
				</div>
            </div>
        </div>
    </div>
</x-app-layout>


