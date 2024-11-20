<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;



    public function tags()
    {

        return $this->hasMany(MealTag::class, 'mealId');

    } // end function





    public function instructions()
    {

        return $this->hasMany(MealInstruction::class, 'mealId');

    } // end function



    public function menus()
    {

        return $this->hasMany(MealMenu::class, 'mealId');

    } // end function




    public function servingInstructions()
    {

        return $this->hasMany(MealServingInstruction::class, 'mealId');

    } // end function






    public function sizes()
    {

        return $this->hasMany(MealSize::class, 'mealId');

    } // end function






    public function certainSize($sizeId)
    {

        return $this->sizes()?->where('sizeId', $sizeId)?->first() ?? null;

    } // end function







    public function diet()
    {

        return $this->belongsTo(Diet::class, 'dietId');

    } // end function





    public function type()
    {

        return $this->belongsTo(Type::class, 'typeId');

    } // end function







    public function container()
    {

        return $this->belongsTo(Container::class, 'containerId');

    } // end function








    public function label()
    {

        return $this->belongsTo(Label::class, 'labelId');

    } // end function







    public function types()
    {

        return $this->hasMany(MealAvailableType::class, 'mealId');

    } // end function







    public function typesInArray()
    {


        // 1: getTypes - loop
        $typesInArray = [];
        $availableTypes = $this->types()->get();



        foreach ($availableTypes as $availableType) {

            array_push($typesInArray, $availableType->mealType->name);

        } // end loop


        return $typesInArray ? $typesInArray : ['Not Assigned'];


    } // end function














    // ------------------------------------------
    // ------------------------------------------
    // ------------------------------------------







    public function ingredients()
    {

        return $this->hasMany(MealIngredient::class, 'mealId');

    } // end function







    public function parts()
    {

        return $this->hasMany(MealPart::class, 'mealId');

    } // end function













    // ------------------------------------------
    // ------------------------------------------
    // ------------------------------------------
    // ------------------------------------------










    public function inMenu($id)
    {


        // 1: dependencies
        $isIncluded = $this->menus()?->where('menuId', $id)?->count() ?? 0;


        return $isIncluded > 0 ? true : false;


    } // end function










    // ------------------------------------------
    // ------------------------------------------








    public function servingInstructionsInArray()
    {


        // :: root
        $servingInstructionsInArray = [];




        // 1: getMealServingInstructions
        $mealServingInstructions = $this->servingInstructions()?->where('isActive', true)?->pluck('servingInstructionId')?->toArray() ?? [];




        // 1.2: getServingInstructions
        $servingInstructionsInArray = ServingInstruction::whereIn('id', $mealServingInstructions)?->get()?->pluck('name')?->toArray() ?? [];




        return $servingInstructionsInArray;




    } // end function










    // ------------------------------------------
    // ------------------------------------------








    public function totalGrams()
    {


        // :: root
        $totalGrams = 0;



        $totalGrams += $this?->ingredients?->where('isDefault', 1)?->sum('amount') ?? 0;
        $totalGrams += $this?->parts?->where('isDefault', 1)?->sum('amount') ?? 0;




        return $totalGrams;


    } // end function













    // ------------------------------------------
    // ------------------------------------------








    public function totalAfterCookGrams()
    {


        // :: root
        $totalGrams = 0;
        $ingredients = $this->ingredients()?->get();





        // 1: ingredients - withConversion
        foreach ($ingredients?->where('isDefault', 1) ?? [] as $mealIngredient) {


            $conversionValue = ConversionIngredient::where('ingredientId', $mealIngredient?->ingredientId)
                ->where('cookingTypeId', $mealIngredient?->cookingTypeId)?->first()?->conversionValue ?? 1;


            $totalGrams += ($mealIngredient?->amount ?? 0) * $conversionValue;


        } // end loop









        // 2: parts
        $totalGrams += $this?->parts?->where('isDefault', 1)?->sum('amount') ?? 0;






        return $totalGrams;


    } // end function










    // ------------------------------------------
    // ------------------------------------------










    public function partsInArray()
    {


        // :: parts
        $parts = [];



        // 1: ingredients
        $mealIngredients = $this->ingredients()?->get();

        foreach ($mealIngredients?->unique('mealId') as $mealIngredient)
            $mealIngredient?->ingredient ? array_push($parts, $mealIngredient->ingredient->name) : null;






        // 2: parts
        $mealParts = $this->parts()?->get();

        foreach ($mealParts?->unique('mealId') as $mealPart)
            $mealPart?->part ? array_push($parts, $mealPart->part->name) : null;






        return count($parts) > 0 ? $parts : ['List is empty'];



    } // end function













    // ------------------------------------------
    // ------------------------------------------










    public function allergiesAndExcludesInArray($allergies = [], $excludes = [], $allergyIngredients = [], $excludeIngredients = [])
    {




        // 1: ingredients
        $mealIngredients = $this->ingredients()?->get() ?? [];



        foreach ($mealIngredients?->where('isDefault', 1) ?? [] as $mealIngredient) {

            if ($mealIngredient->ingredient && $mealIngredient->ingredient->excludes) {

                array_push($excludes, ...$mealIngredient->ingredient->excludesInArray());
                array_push($excludeIngredients, $mealIngredient->ingredient->id);

            } // end if




            if ($mealIngredient->ingredient && $mealIngredient->ingredient->allergies) {

                array_push($allergies, ...$mealIngredient->ingredient->allergiesInArray());
                array_push($allergyIngredients, $mealIngredient->ingredient->id);

            } // end if


        }  // end loop







        // -----------------------------------------
        // -----------------------------------------







        // 2: parts
        $mealParts = $this->parts()?->get() ?? [];


        foreach ($mealParts?->where('isDefault', 1) ?? [] as $mealPart) {


            // :: recursion
            $combinedArray = $mealPart?->part?->allergiesAndExcludesInArray($allergies, $excludes, $allergyIngredients, $excludeIngredients);



            // :: merge
            $excludes = array_merge($excludes, $combinedArray['excludes'] ?? []);
            $allergies = array_merge($allergies, $combinedArray['allergies'] ?? []);

            $allergyIngredients = array_merge($allergyIngredients, $combinedArray['allergyIngredients'] ?? []);
            $excludeIngredients = array_merge($excludeIngredients, $combinedArray['excludeIngredients'] ?? []);



        } // end loop









        return ['allergies' => array_unique($allergies ?? []),
            'excludes' => array_unique($excludes ?? []),
            'allergyIngredients' => array_unique($allergyIngredients ?? []),
            'excludeIngredients' => array_unique($excludeIngredients ?? [])];




    } // end function











    // ------------------------------------------
    // ------------------------------------------











} // end model
