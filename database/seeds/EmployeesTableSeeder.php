<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('employees')->insert(

            [
            'thumbnail' => 'person1-th.png',
            'headshot' => 'person1.png',
            'firstname' => 'Bilbo',
            'lastname' => 'Baggins',
            'department' => 'Unexpected Adventures',
            'info' => 'A very prim and respectable Hobbit with a polite disposition and aversion to anything out of the ordinary.'
            ]);


            DB::table('employees')->insert(

            [
            'thumbnail' => 'person2-th.png',
            'headshot' => 'person2.png',
            'firstname' => 'Gandalf',
            'lastname' => 'The White',
            'department' => 'Magic and Wizardry',
            'info' => 'Quick to anger - and equally quick to laugh. Smokes a pipe. Comes back from breaks smelling like Wizard Weed.'
            ]);


            DB::table('employees')->insert(

            [
            'thumbnail' => 'person3-th.png',
            'headshot' => 'person3.png',
            'firstname' => 'Elrond',
            'lastname' => 'Half-Elvin',
            'department' => 'Magical Aquisitions',
            'info' => 'Noble and fair as an elf-lord, as strong as a warrior, as wise as a wizard, as venerable as a king of dwarves, and as kind as summer.'
            ]);


            DB::table('employees')->insert(

            [
            'thumbnail' => 'person4-th.png',
            'headshot' => 'person4.png',
            'firstname' => 'Frodo',
            'lastname' => 'Baggins',
            'department' => 'Curiousities',
            'info' => 'The most famous of all Hobbits - nephew of Bilbo Baggins.'
            ]);

            DB::table('employees')->insert(

            [
            'thumbnail' => 'person5-th.png',
            'headshot' => 'person5.png',
            'firstname' => 'Gollum',
            'lastname' => 'Not Applicable',
            'department' => 'No Longer Employed',
            'info' => 'Terminated. Reason: Stealing jewelery from other employees; referring to every ring he came across as "My Precious", refusing to work with the lights on, refusing to keep good hygeine per workplace standards. '
            ]);

            DB::table('employees')->insert(

            [
            'thumbnail' => 'person6-th.png',
            'headshot' => 'person6.png',
            'firstname' => 'Aragorn',
            'lastname' => 'son of Arathorn',
            'department' => 'Upper Management',
            'info' => 'He was Aragorn son of Arathorn, the nine and thirtieth heir in the right line from Isildur, and yet more like Elendil than any before him.'
            ]);


            DB::table('employees')->insert(

            [
            'thumbnail' => 'person7-th.png',
            'headshot' => 'person7.png',
            'firstname' => 'Legolas',
            'lastname' => 'son of Arathorn',
            'department' => 'Upper Management',
            'info' => 'Keen eyesight, sensitive hearing, excellent bowmanship, and FABULOUS hair.'
            ]);

            DB::table('employees')->insert(

            [
            'thumbnail' => 'person8-th.png',
            'headshot' => 'person8.png',
            'firstname' => 'Arwen',
            'lastname' => 'Evenstar',
            'department' => 'CEO',
            'info' => 'In the middle of the table, against the woven cloths upon the wall, there was a chair under a canopy, and there sat a lady fair to look upon, and so like was she in form of womanhood to Elrond that Frodo guessed that she was one of his close kindred. Young she was and yet not so. The braids of her dark hair were touched by no frost, her white arms and clear face were flawless and smooth, and the light of stars was in her bright eyes, grey as a cloudless night; yet queenly she looked, and thought and knowledge were in her glance, as of one who has known many things that the years bring.'
            ]);


            DB::table('employees')->insert(

            [
            'thumbnail' => 'person9-th.png',
            'headshot' => 'person9.png',
            'firstname' => 'Samwise',
            'lastname' => 'Gamgee',
            'department' => 'Personification of Good',
            'info' => 'A very good friend. Samwise Gamgee, known as Sam, was a Hobbit of the Shire. He was Frodo Baggins gardener and best friend. Sam proved himself to be Frodos closest and most dependable companion, the most loyal of the Fellowship of the Ring, and also played a critical role in protecting Frodo and destroying the One Ring.'
            ]);

            DB::table('employees')->insert(

            [
            'thumbnail' => 'person10-th.png',
            'headshot' => 'person10.png',
            'firstname' => 'Saruman',
            'lastname' => 'The White',
            'department' => 'Two-Faced Bitches',
            'info' => 'You think you know a guy. Not this guy. Used to be a good friend to Gandalf. Used to smoke the Wizard Weed. Now all he cares about is the endless pursuit of power.'
                ]);



    }


}
