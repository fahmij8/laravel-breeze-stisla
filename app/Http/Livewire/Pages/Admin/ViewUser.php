<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ViewUser extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.pages.admin.view-user', [
            'users' => User::paginate(10),
        ]);
    }

    public function mount()
    {
        if (!auth()->user()->hasRole('admin')) {
            return redirect()->route('dashboard');
        }
    }

    public function demoteUser($id)
    {
        $user = User::find($id);
        $user->detachRole('admin');
        $user->attachRole('user');
        session()->flash('success', $user->name . ' has been demoted to user');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        session()->flash('success', $user->name . ' has been deleted');
    }

    public function promoteUser($id)
    {
        $user = User::find($id);
        $user->detachRole('user');
        $user->attachRole('admin');
        session()->flash('success', $user->name . ' has been promoted to admin');
    }
}