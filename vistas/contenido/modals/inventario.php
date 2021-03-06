<!--INICIO MODAL MOVIMIENTO DE PRODUCTOS-->
<div class="modal fade" id="modal_movimientos">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Movimiento de Productos</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div>
        <div class="modal-body">		
			<form class="FormularioAjax" id="formMovimientos" method="POST" data-form="" autocomplete="off" enctype="multipart/form-data">			
				<div class="form-row">
					<div class="col-md-12 mb-3">
						<div class="input-group mb-3">
						    <input type="hidden" id="movimientos_id" name="movimientos_id" class="form-control"/>	
							<input type="text" id="proceso_movimientos" class="form-control" readonly>
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fa fa-plus-square fa-lg"></i></span>
							</div>
						</div>	 
					</div>							
				</div>
				<div class="form-row">
					<div class="col-md-6 mb-3">
					  <label>Tipo Producto <span class="priority">*<span/></label>
					  <select id="movimientos_tipo_producto_id" name="movimientos_tipo_producto_id" class="form-control" data-toggle="tooltip" data-placement="top" title="Tipo de Producto" required>
							<option value="">Seleccione</option>
					  </select>					  
					</div>
					<div class="col-md-6 mb-3">
						<label>Productos <span class="priority">*<span/></label>
						<div class="input-group mb-3">
						  <select id="movimiento_producto" name="movimiento_producto" class="form-control" data-toggle="tooltip" data-placement="top" title="Productos" required>
								<option value="">Seleccione</option>
						  </select>
						 <div class="input-group-append" id="buscar_productos_movimiento_form">				
							<span data-toggle="tooltip" data-placement="top" title="Búsqueda de Productos"><a data-toggle="modal" href="#" class="btn btn-outline-success form-control buscar_productos"><div class="sb-nav-link-icon"></div><i class="fas fa-search-plus fa-lg"></i></a></span>
						 </div>
						</div>			  
					</div>								
				</div>	
				<div class="form-row">
					<div class="col-md-6 mb-3">
					  <label>Tipo de Operación <span class="priority">*<span/></label>
					  <select id="movimiento_operacion" name="movimiento_operacion" class="form-control" data-toggle="tooltip" data-placement="top" title="Tipo Operación" required>
						 <option value="">Seleccione</option>
					  </select>					  
					</div>
					<div class="col-md-6 mb-3">
					  <label>Cantidad <span class="priority">*<span/></label>
					  <input type="number" required id="movimiento_cantidad" name="movimiento_cantidad" class="form-control" required step="0.01">				  
					</div>										
				</div>	
				<div class="RespuestaAjax"></div> 
			</form>
        </div>		
		<div class="modal-footer">
			<button class="guardar btn btn-primary ml-2" type="submit" style="display: none;" id="modal_movimientos" form="formMovimientos"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Registrar</button>		
		</div>			
      </div>
    </div>
</div>
<!--FIN MODAL MOVIMIENTO DE PRODUCTOS-->