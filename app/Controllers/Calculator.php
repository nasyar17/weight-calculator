<?php

namespace App\Controllers;

class Calculator extends BaseController
{
   public function index()
   {
      $data = [
         'title' => 'Weight Calculator'
      ];

      return view('calculator/index.php', $data);
   }

   public function bmi()
   {
      $data = [
         'title' => 'Body Mass Index Calculator'
      ];

      return view('calculator/bmi', $data);
   }

   public function calculate($type)
   {
      if ($type == 'bmi') { }
   }
}
