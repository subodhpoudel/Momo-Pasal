@extends('layouts.app')

@section('content')
<div class="wrapper create-momo">
        <h1>Order Momo</h1>
 
  <form action="/momos" method="POST">
  @csrf
    <label for="name">Your name:</label>
    <input type="text" name="name" id="name" required>
    
    <label for="type">Choose type of momo:</label>
    <select name="type" id="type">
      <option value="chicken">Chicken</option>
      <option value="buff">Buff</option>
      <option value="veg">Veg</option>
      <option value="pork">Pork</option>
    </select>
    
    <label for="cookingStyle">How would you like it:</label>
    <select name="cookingStyle" id="cookingStyle">
      <option value="steam">Steam</option>
      <option value="fried">Fried</option>
      <option value="Chilly">Chilly</option>
      <option value="Open">Open</option>
    </select>
    
    <label for="plates">How many plates:</label>
    <input type="number" name="plates"> </br>

    <fieldset>
    <label> Cold Drinks </label>
    <input type="checkbox" name ="colddrinks[]" value="Coke"> Coke <br>
    <input type="checkbox" name ="colddrinks[]" value="Fanta"> Fanta <br>
    <input type="checkbox" name ="colddrinks[]" value="Sprite"> Sprite <br>
    </fieldset>

    <input type="submit" value="Order Momo">
  </form>
</div>
@endsection        
