<div class="row">
    <div class="col-md-12">
        <section class="panel">                        
            <div class="panel-body">

              @if ( !empty ( $jugos->id) )

                <div class="form-group">
                  <label for="nombre" class="negrita">Nombre:</label>                          
                  <div>
                    <input class="form-control" placeholder="Jugo de Fresa" required="required" name="nombre" type="text" id="nombre" value="{{ $jugos->nombre }}">                              
                  </div>
                </div>

                <div class="form-group">
                  <label for="precio" class="negrita">Precio:</label>                          
                  <div>
                    <input class="form-control" placeholder="4.50" required="required" name="precio" type="text" id="precio" value="{{ $jugos->precio }}">                              
                  </div>
                </div>

                <div class="form-group">
                  <label for="stock" class="negrita">Stock:</label>                          
                  <div>
                    <input class="form-control" placeholder="40" required="required" name="stock" type="text" id="stock" value="{{ $jugos->stock }}">                              
                  </div>
                </div>

                <div class="form-group">
                  <label for="img" class="negrita">Selecciona una imagen:</label>                         
                  <div>
                  <input name="img[]" type="file" id="img" multiple="multiple">
                  <br>
                  <br>
                  @if ( !empty ( $jugos->img) )

                    <span>Imagen Actual: </span>
                    <br>
                    <img src="../../../uploads/{{ $jugos->img }}" width="200" class="img-fluid">

                  @else

                    Aún no se ha cargado una imagen para este producto

                  @endif                
                  </div>

                </div>

              @else

                <div class="form-group">
                  <label for="nombre" class="negrita">Nombre:</label>                          
                  <div>
                    <input class="form-control" placeholder="Jugo de Fresa" required="required" name="nombre" type="text" id="nombre">                              
                  </div>
                </div>

                <div class="form-group">
                  <label for="precio" class="negrita">Precio:</label>                          
                  <div>
                    <input class="form-control" placeholder="4.50" required="required" name="precio" type="text" id="precio">                              
                  </div>
                </div>

                <div class="form-group">
                  <label for="stock" class="negrita">Stock:</label>                          
                  <div>
                    <input class="form-control" placeholder="40" required="required" name="stock" type="text" id="stock">                              
                  </div>
                </div>

                <div class="form-group">
                  <label for="img" class="negrita">Selecciona una imagen:</label>
                  <div>
                    <input name="img[]" type="file" id="img" multiple="multiple">               
                  </div>
                </div>

              @endif

                <button type="submit" class="btn btn-info">Guardar</button>
                <a href="{{ route('admin/jugos') }}" class="btn btn-warning">Cancelar</a>

                <br>
                <br>
              
            </div>
        </section>
    </div>
</div>