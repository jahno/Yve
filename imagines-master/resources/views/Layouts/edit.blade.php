@extends('Layouts.app')

@section('content')
    <div class="container">


  <form action="{{ route('edit') }}" method="post" enctype="multipart/form-data">
    		{{csrf_field()}}

  

<div class="form-group">
    <label for="nom">Pseudo:</label>
    <input type="text" class="form-control  is-invalide" id="nom" name="name" value="{{ $user->name }}">
     {!! $errors->first('name',' <div class="alert alert-danger" role="alert">
   :message
</div> ')  !!}
  </div>


  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">

    {!! $errors->first('email',' <div class="alert alert-danger" role="alert">
   :message
</div> ')  !!}
  

  </div>

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password">

      
  </div>



       



  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="filestyle" data-text="upload" name="avatar">
    {!! $errors->first('avatar',' <div class="alert alert-danger" role="alert">
   :message
</div> ')  !!}
  </div>


<div class="form-group">
    <label for="nom">nom:</label>
    <input type="text" class="form-control" id="nom" name="nom" >
  </div>


  <div class="form-group">
    <label for="prenom">prenom</label>
    <input type="text" class="form-control" id="prenom" name="prenom" >
  </div>


  <div class="form-group">
    <label for="age">age</label>
    <input type="number" class="form-control" id="age" name="age">
  </div>


  <div class="form-group">
    <label for="ville">ville</label>
    <input type="text" class="form-control" id="ville" name="vile">
  </div>
  


  <div class="form-group">
    <label for="region">region</label>
    <input type="text" class="form-control" id="region" name="region">
  </div>



 <div class="form-group">
    <label for="contact">contact</label>
    <input type="number" class="form-control" id="contact" name="contact">
  </div>


  <div class="form-group">
    <label for="cv">cv</label>
    <input type="file" class="form-control" id="cv" name="cv">
    {!! $errors->first('cv_eleve',' <div class="alert alert-danger" role="alert">
   :message
</div> ')  !!}
  </div>


  <div class="form-group">
    <label for="experience">experience</label>
    <input type="text" class="form-control" id="experience" name="experience">
  </div>





  <button type="submit" class="btn btn-default">Submit</button>
</form>
    		
@endsection

