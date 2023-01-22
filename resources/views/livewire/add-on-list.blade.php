<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <div>
                </div>
            
                <div class="mt-8 text-2xl">
                    <h2>Enregistrer une nouvelle personne sur la liste de présence</h2>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    @if(!$success)
                    <form wire:submit.prevent="submit">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Nom</label>
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    <input type="text" class="form-control" wire:model="name" required/>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="form-label">Prénoms</label>
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    <input type="text" class="form-control" wire:model="last_name" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Numéro de téléphone</label>
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    <input type="text" class="form-control" wire:model="phone" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Adresse email</label>
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    <input type="email" class="form-control" wire:model="email" required/>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <button class="float-right btn btn-primary" type="submit">Enregistrer</button>
                        </div>
                    </form>
                    @else
                    <h2 class="text-center">Enregistrment effectuer avec succès</h2>
                    <div class="d-flex justify-content-between">
                        <a href="{{Route('dashboard')}}" class="btn btn-dark"> Retour au tableau de bord</a>
                        <button class="btn btn-warning">Aller à la liste</button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
</div>
