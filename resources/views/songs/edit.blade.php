  {{--Inicio modal--}}
                     <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                           <div class="modal-dialog">
                         <div class="modal-content">
                               <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                 <h4 class="modal-title custom_align" id="heading-user-show">User edit</h4>
                           </div>
                              {{--Inicio formualrio --}}
                               {!! Form::open(array('method'=>'PUT','id'=>'form-editSongs')) !!}
                               <div class="modal-body">

                                   <!-- Title Form Input -->
                                          <div class="form-group">
                                              {!! Form::label('name','Name: ')  !!}
                                              {!! Form::text('name', '', ['class'=>'form-control'])  !!}
                                          </div>



                           </div>
                               <div class="modal-footer ">
                              <div class="ui buttons">
                               <button class="ui button" type="reset"  id="btn-students-cancel"  data-dismiss="modal">Cancel</button>
                               <div class="or"></div>
                               <button class="ui positive button" type="submit" id="btn-students-save">Edit</button>
                             </div>
                          {!! Form::close() !!}
                          {{--Final del formulario--}}
                             </div>
                             </div>
                       </div>
                         </div> {{--Fin modal--}}