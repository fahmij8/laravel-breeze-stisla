<div>
    @include('livewire.utilities.alerts')
    <x-slot name="header">
        <div class="section-header">
            <h1>User Management</h1>
        </div>
    </x-slot>

    <div class="card">
        <div class="card-header">
            <h4>User Data</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col" width="5%">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col" width="5%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th>{{ ($users->currentpage() - 1) * $users->perpage() + $loop->index + 1 }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if ($user->roles->first()->display_name == 'User')
                                        <span class="badge badge-primary">User</span>
                                    @else
                                        <span class="badge badge-dark">Admin</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex">
                                        @if ($user->roles->first()->display_name == 'User')
                                            <button class="btn btn-sm btn-link" data-toggle="tooltip"
                                                data-placement="top" title="Promote to Admin"
                                                wire:click='promoteUser({{ $user->id }})'>
                                                <i class="fas fa-user-shield text-info"></i>
                                            </button>
                                        @else
                                            <button class="btn btn-sm btn-link" data-toggle="tooltip"
                                                data-placement="top" title="Demote to User"
                                                wire:click='demoteUser({{ $user->id }})'>
                                                <i class="fas fa-user text-info"></i>
                                            </button>
                                        @endif
                                        <button class="btn btn-sm btn-link" data-toggle="tooltip" data-placement="top"
                                            title="Delete" wire:click='deleteUser({{ $user->id }})'>
                                            <i class="fas fa-trash text-danger"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>

<script>
    $().tooltip();
</script>
