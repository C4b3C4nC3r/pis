<?php

namespace Database\Seeders;
use App\Models\x_example;
use Illuminate\Database\Seeder;

class x_exampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $x_example=new x_example();
         $x_example->name="Laravel";
         $x_example->descripcion="loreto";
         $x_example->categoria="loretos categories";
 
         $x_example->save();

         
         $x_example2=new x_example();
         $x_example2->name="Laravel";
         $x_example2->descripcion="loreto";
         $x_example2->categoria="loretos categories";
 
         $x_example2->save();

         $x_example3=new x_example();
         $x_example3->name="Laravel";
         $x_example3->descripcion="loreto";
         $x_example3->categoria="loretos categories";
 
         $x_example3->save();
    }
}
