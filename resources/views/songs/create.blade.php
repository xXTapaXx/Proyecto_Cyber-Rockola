{{--Inicio modal--}}
            <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="create" aria-hidden="true">
                  <div class="modal-dialog">
                <div class="modal-content">
                      <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title custom_align" id="heading-user-show">Songs create</h4>
                        
                  </div>

                   {{--Inicio formualrio --}}
                       
                      <div class="modal-body">
                         {!! Form::open(['route' => 'canciones.store',
                                             'method' => 'POST',
                                             'class' => 'dropzone',
                                             'id' => 'my-dropzone',
                                             'files' => true]) !!}

                                             @include('songs.form')

                  </div>
                      <div class="modal-footer ">

                      <div class="ui buttons">
                          <button class="ui button" type="reset"  id="btn-students-cancel"  data-dismiss="modal">Cancel</button>
                          <div class="or"></div>
                          <button class="ui positive button" type="submit" id="submit-all">Upload</button>
                        </div>
                  </div>

                    {!! Form::close() !!}
                    
                    
                  {{--Final del formulario--}}

                    </div>


              </div>
                </div> {{--Fin modal--}}