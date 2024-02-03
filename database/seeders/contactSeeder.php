<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class contactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts = [
            [
                'name' => 'mohamed' ,
                'email' => 'mo@gmail.com' ,
                'message' => 'hi how are U'
            ] ,
            [
                'name' => 'seif' ,
                'email' => 'se@gmail.com' ,
                'message' => 'i have a problem'
            ]
            ];

            foreach ($contacts as $contact) {
                Contact::create([
                    'name' => $contact['name'] ,
                    'email' => $contact['email'] ,
                    'message' => $contact['message']
                ]
                );
            }
    }
}
