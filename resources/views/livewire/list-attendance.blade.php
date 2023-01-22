<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <div>
                </div>
            
                <div class="mt-8 text-2xl">
                    <div class="d-flex justify-content-between">
                        <h2>Liste de présence</h2>
                        <a href="{{Route('dashboard')}}" class="btn btn-dark"> Retour au tableau de bord</a>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    <table class="table table-responsive">
                        <thead>
                            <th>Nom</th>
                            <th>Prénoms</th>
                            <th>Téléphone</th>
                            <th>Adresse email</th>
                            <th>Date</th>
                        </thead>
                        <tbody>
                            @foreach($attendances as $attendance)
                            <tr>
                                <td>{{$attendance->name}}</td>
                                <td>{{$attendance->last_name}}</td>
                                <td>{{$attendance->phone}}</td>
                                <td>{{$attendance->email}}</td>
                                <td>{{$attendance->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
