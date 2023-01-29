<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for View Staff KPI') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in as an admin/manager!") }} <br>
                    Your name is: {{Auth::user()->name}} <br>
                    Your email is: {{Auth::user()->email}} <br>
                    Your Staffs KPI is: <br>
                    
                    <table>
                        <tr>
                        <td>Id</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>City Name</td>
                        <td>Email</td>
                        </tr>
                        <tr>
                        <td>Id</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>City Name</td>
                        <td>Email</td>
                        </tr>
                   

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
