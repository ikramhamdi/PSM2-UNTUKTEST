
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Patient') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="card">
                    <div class="card-header">Patient Page</div>
                        <div class="card-body">
                            <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('dashboard.managePatient') }}"> Back</a>
                            </div>
                      
                        
                          <div class="card-body">
                          <h5 class="card-title">Patient ID : {{ $patients->patientID }}</h5>
                          <h5 class="card-text">Patient Name : {{ $patients->patientName }}</h5>
                          <h5 class="card-text">Patient Age : {{ $patients->patientAge }}</h5>
                          <h5 class="card-text">Patient Gender : {{ $patients->patientGender }}</h5>
                          <h5 class="card-text">Patient Race : {{ $patients->patientRace }}</h5>
                          <h5 class="card-text">Treatment Type : {{ $patients->treatmentType }}</h5>
                          <h5 class="card-text">Treatment Date : {{ $patients->treatmentDate }}</h5>
                          
                        </div>
                        
                      </hr>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



