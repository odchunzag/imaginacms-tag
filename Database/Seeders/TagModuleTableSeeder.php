<?php

namespace Modules\Tag\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Iprofile\Entities\Role;
use Modules\Isite\Entities\Module;

class TagModuleTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Model::unguard();
    
    $columns = [
      ["config" => "config", "name" => "config"],
      ["config" => "permissions", "name" => "permissions"],
    ];
  
    $moduleRegisterService = app("Modules\Isite\Services\RegisterModuleService");
  
    $moduleRegisterService->registerModule("tag", $columns);
  }
}
