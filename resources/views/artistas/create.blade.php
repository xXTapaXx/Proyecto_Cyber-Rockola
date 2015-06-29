{{--Inicio modal--}}
            <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="create" aria-hidden="true">
                  <div class="modal-dialog">
                <div class="modal-content">
                      <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title custom_align" id="heading-user-show">Artist create</h4>
                  </div>
               
                   {{--Inicio formualrio --}}
                  {!! Form::open(['url' => 'artistas']) !!}

                      <div class="modal-body">

                    <!-- Title Form Input -->
                                 <div class="form-group">
                                     {!! Form::label('nombre','Nombre: ')  !!}
                                     {!! Form::text('nombre', null , ['class'=>'form-control'])  !!}
                                 </div>

                                 <!-- Body Form Input -->
                                 <div class="form-group">
                                     {!! Form::label('genero','Género: ')  !!}
                                     {!! Form::text('genero', null , ['class'=>'form-control'])  !!}
                                 </div>


                  </div>
                      <div class="modal-footer ">

                      <div class="ui buttons">
                          <button class="ui button" type="reset"  id="btn-students-cancel"  data-dismiss="modal">Cancel</button>
                          <div class="or"></div>
                          <button class="ui positive button" type="submit" id="btn-students-save">Save</button>
                        </div>
                  </div>
                  {!! Form::close() !!}
                  @include('errors.list')

                  {{--Final del formulario--}}

                    </div>


              </div>
                </div> {{--Fin modal--}}





