<?php

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Fortify\Rules\Password;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'reg_email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'mobile' => ['required', 'min:10', 'max:10', 'unique:users'],
            'reg_password' =>  ['required', 'string', new Password,],
            'password_confirmation' => ['required','same:reg_password','min:8'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();
        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'name' => $input['name'],
                'email' => $input['reg_email'],
                'mobile' => $input['mobile'],
                'show_password' => $input['reg_password'],
                'password' => Hash::make($input['reg_password']),
            ]), function (User $user) {
                $this->createTeam($user);
                User::where('id',$user->id)->update(['refer_code'=>create_refer_code($user->id)]);
            });
        });
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }
}
