<div class="dz-message">
 Drag and Drop or Click here for upload the music
</div>

<div class="alert alert-sucess hide" role="alert" id="titulo"></div>
<div class="alert alert-sucess hide" role="alert" id="artista"></div>

<div class="form-group col-lg-12">
   <div class="form-group col-lg-6"><br/>
     {!! Form::text('titulo', null , ['class'=>'form-control col-lg-6', 'placeholder' => 'Titulo de la Cancion...'])  !!}<br/>
   </div>
   <div class="form-group col-lg-6"><br/>

     {!! Form::select('artista',$artistas, null, array('class'=>'form-control col-lg-6')) !!}
    </div>
</div>
 <div class="dropzone-previews"></div>
