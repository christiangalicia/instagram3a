<?php

use Illuminate\Database\Seeder;
use App\Usuario;
use App\Publicacion;
use App\Seguidor;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $usuarios= factory(Usuario::class)->times(10)->create();
       foreach ($usuarios as $usuario){
           factory(Publicacion::class)->times(rand(0, 10))->create([
               'usuario_id'=>$usuario->id,
           ]);
       }
       
       
       $publicaciones = Publicacion::all();
        
        foreach ($usuarios as $user){
            $fin= rand(0,55);
            for($i=0; $i<=$fin;$i++){
                 factory(Seguidor::class)->times(1)->create(
                    ['usuario_id'=>$user->id,
                     'publicacion_id'=>rand(1,$publicaciones->count())]);
            }
            
        }
       
       //factory(App\User::class, 50)->create()->each(function ($user) {
       // $user->posts()->save(factory(App\Post::class)->make());
    //});
    }
}
