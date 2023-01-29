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
                    <form action="{{ route('patients.store') }}" method="POST" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Patient ID:</strong>
                                    <input type="text" name="patientID" id="patientID" class="form-control" placeholder="Patient ID">
                                    @error('patientID')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Patient Name:</strong>
                                    <input type="text" name="patientName" id="patientName" class="form-control" placeholder="Patient Name">
                                    @error('patientName')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Patient Age:</strong>
                                    <input type="number" name="patientAge" id="patientAge" class="form-control" placeholder="Patient Age">
                                    @error('patientAge')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Patient Gender:</strong>
                                    <input type="text" name="patientGender" id="patientGender" class="form-control" placeholder="Patient Gender">
                                    @error('patientGender')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Patient Race:</strong>
                                    <input type="text" name="patientRace" id="patientRace" class="form-control" placeholder="Patient Race">
                                    @error('patientRace')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Treatment Type:</strong>
                                    <input type="text" name="treatmentType" id="treatmentType" class="form-control" placeholder="Treatment Type">
                                    @error('treatmentType')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Treatment Date:</strong>
                                    <input type="date" name="treatmentDate" id="treatmentDate" class="form-control" placeholder="Treatment Date">
                                    @error('treatmentDate')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-warning">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
				</div>
            </div>
        </div>
    </div>
</x-app-layout>



